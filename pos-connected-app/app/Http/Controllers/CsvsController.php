<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;
use App\Csv;
use Illuminate\Support\Facades\DB;

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

    public function showProductWeek(){
        $script = resource_path() . "/python/testReadCsv.py";
        $params = "";
        foreach(Csv::all() as $file) {
            $params = $params . $file->aws_path . ",";
        }

        $command = "python" . " " . $script . " ". $params;


        exec($command, $output);
        $products = array();
        foreach($output as $item) {
            $product = explode(" ", $item);
            $products[$product[0]] = [
                "product" => $product[0],
                "mon" => (float)$product[1],
                "thu" => (float)$product[2],
                "thr" => (float)$product[3],
                "wed" => (float)$product[4],
                "fri" => (float)$product[5],
                "sat" => (float)$product[6],
                "sun" => (float)$product[7]
            ];
        };
        return view("product", ["data" => $products]);
    }


}
