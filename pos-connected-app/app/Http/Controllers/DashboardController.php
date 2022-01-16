<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $week = [
            "sun" => 120000,
            "mon" => 70000,
            "tue" => 80000,
            "wed" => 40000,
            "thu" => 80000,
            "fri" => 140000,
            "sat" => 200000,

            //month
            "jan" => 800000,
            "feb" => 700000,
            "mar" => 1000000,
            "apr" => 2000000,
            "may" => 1800000,
            "jun" => 1400000,
            "jul" => 900000,
            "aug" => 1000000,
            "sep" => 1200000,
            "oct" => 1400000,
            "nov" => 1600000,
            "dec" => 1800000,
        ];

        return view("dashboard", ["data" => $week]);

        
    }
        
}