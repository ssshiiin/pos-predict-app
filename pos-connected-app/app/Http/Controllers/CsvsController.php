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
        $files = $request->file("file");

        foreach($files as $file) {
            $file_name = $file->getClientOriginalName();

            $path = Storage::disk('s3')->putFileAs('/CsvTest', $file, $file_name, 'public');

            Csv::create([
                "caption" => $caption,
                "aws_path" => Storage::disk('s3')->url($path),
            ]);
        }
    }

    public function show(){
        $script = resource_path() . "/python/testReadCsv.py";
        $params = "";
        foreach(Csv::all() as $file) {
            $params = $params . $file->aws_path . ",";
        }

        $command = "python" . " " . $script . " ". $params;


        exec($command, $output);
        dump($script);
        dd($output);
    }


}
