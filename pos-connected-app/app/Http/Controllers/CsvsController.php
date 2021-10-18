<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;
use App\Csv;

class CsvsController extends Controller
{
    public function index(){
        return view('form.register');
    }

    public function create(Request $request){
        $caption = $request->caption;
        $date = $request->date;
        $csv = $request->file("csv");
        
        $path = Storage::disk('s3')->putFileAs('/CsvTest', $csv, $date . '.csv', 'public');
        
        Csv::create([
            "caption" => $caption,
            "aws_csv_path" => Storage::disk('s3')->url($path),
            "date" => $date
        ]);
    }

    public function show(){
        // $s3_file = File::get("https://pos-predict-app.s3.ap-northeast-1.amazonaws.com/CsvTest/DpobyIHPoRRhagSMYCVC9DO3EfOtuF5V68MeBOsQ.txt");
        // dd($s3_file);
        $script = resource_path() . "/python/testReadCsv.py";

        exec("python" . " " . $script, $output);
        dump($script);
        dd($output);
    }


}
