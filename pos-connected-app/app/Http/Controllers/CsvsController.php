<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;
use App\Csv;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class CsvsController extends Controller
{
    public function index(){
        $uploaded_info = Csv::selectRaw("year, month, count(*) as count, max(date) as date")->groupByRaw("year, month")->get();
        return view('form.register', ["data" => $uploaded_info]);
    }

    public function create(Request $request){
        $files = $request->file("file");

        foreach($files as $file) {
            $file_name = $file->getClientOriginalName();
            preg_match("/[0-9]{8}/u", $file_name, $match);
            $year = str_split($match[0], 4)[0];
            $month = str_split(str_split($match[0], 4)[1], 2)[0];
            $date = str_split(str_split($match[0], 4)[1], 2)[1];
            $path = Storage::disk('s3')->putFileAs('/CsvTest', $file, $file_name, 'public');

            Csv::create([
                "year" => (int)$year,
                "month" => (int)$month,
                "date" => (int)$date,
                "aws_path" => Storage::disk('s3')->url($path),
            ]);
        }

        return redirect('/dashboard/register');
    }

    public function productPredict(){
        $script = resource_path() . "/python/testReadCsv.py";
        $params = "";
        foreach(Csv::all() as $file) {
            $params = $params . $file->aws_path . ",";
        }

        $command = "python" . " " . $script . " ". $params;


        $last_day = 
            Csv::orderBy("year","desc")->
            orderBy("month","desc")->
            orderBy("date","desc")->
            first();
        $year = $last_day->year;
        $month = $last_day->month;
        $date = $last_day->date;

        exec($command, $output);
        $products = array();
        foreach($output as $item) {
            $predict_array = explode(" ", $item);
            $product = $predict_array[0];
            $category = $predict_array[1];

            if (DB::table("categories")->where("category", $category)->doesntExist()){
                DB::table("categories")->insert([
                        "category" => $category
                    ]);
            }
            $category_id = DB::table("categories")->where("category", $category)->first()->id;

            if (DB::table("products")->where("product", $product)->doesntExist()){
                DB::table("products")->insert([
                        "category_id" => $category_id,
                        "product" => $product,
                    ]);
            }
            $product_id = DB::table("products")->where("product", $product)->first()->id;

            if (DB::table("product_predicts")->where("product_id", $product_id)->where("year", $year)->where("month", $month)->where("week_num", ($date % 7) + 1)->doesntExist()){
                DB::table("product_predicts")->insert(
                    [
                        [
                            "product_id" => $product_id,
                            "year" => $year,
                            "month" => $month, 
                            "week_num" => ($date % 7) + 1,
                            "week" => "mon",
                            "predict" =>  $predict_array[2]
                        ],
                        [
                            "product_id" => $product_id,
                            "year" => $year,
                            "month" => $month, 
                            "week_num" => ($date % 7) + 1,
                            "week" => "thu",
                            "predict" =>  $predict_array[3]
                        ],
                        [
                            "product_id" => $product_id,
                            "year" => $year,
                            "month" => $month, 
                            "week_num" => ($date % 7) + 1,
                            "week" => "wed",
                            "predict" =>  $predict_array[4]
                        ],
                        [
                            "product_id" => $product_id,
                            "year" => $year,
                            "month" => $month, 
                            "week_num" => ($date % 7) + 1,
                            "week" => "thr",
                            "predict" =>  $predict_array[5]
                        ],
                        [
                            "product_id" => $product_id,
                            "year" => $year,
                            "month" => $month, 
                            "week_num" => ($date % 7) + 1,
                            "week" => "fri",
                            "predict" =>  $predict_array[6]
                        ],
                        [
                            "product_id" => $product_id,
                            "year" => $year,
                            "month" => $month, 
                            "week_num" => ($date % 7) + 1,
                            "week" => "sat",
                            "predict" =>  $predict_array[7]
                        ],
                        [
                            "product_id" => $product_id,
                            "year" => $year,
                            "month" => $month, 
                            "week_num" => ($date % 7) + 1,
                            "week" => "sun",
                            "predict" =>  $predict_array[8]
                        ],
                    ]
                );
            }
        };
    }
    
    public function showProductWeek(Request $request){
        $category = $request->input('category');
        $products = array();
        $targetProducts = Product::whereHas('category', function (Builder $query) use ($category) {
            $query->where('category', $category);
        })->get();

        foreach($targetProducts as $product) {
            $recentData = $product->productPredicts->sortByDesc("year")->sortByDesc("month")->sortBy("week_num");
            $products[$product->product] = [
                "product" => $product->product,
                "mon" => $recentData->where("week", "mon")->first()->predict,
                "thu" => $recentData->where("week", "thu")->first()->predict,
                "wed" => $recentData->where("week", "wed")->first()->predict,
                "thr" => $recentData->where("week", "thr")->first()->predict,
                "fri" => $recentData->where("week", "fri")->first()->predict,
                "sat" => $recentData->where("week", "sat")->first()->predict,
                "sun" => $recentData->where("week", "sun")->first()->predict
            ];
        }

        return view("product", ["data" => $products, "categories_index" => Category::all()]);
    }

    public function showOrderProduct(){
        return view("order", ["categories" => Category::with("products")->get()]);
    }


}
