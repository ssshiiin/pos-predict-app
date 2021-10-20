<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfitController extends Controller
{
    public function index(){
        $test = [
            "sun" => 120000,
            "mon" => 70000,
            "thu" => 80000,
            "wed" => 40000,
            "thr" => 80000,
            "fri" => 140000,
            "sat" => 200000,
        ];

        return view("profit", ["data" => $test]);
    }
}
