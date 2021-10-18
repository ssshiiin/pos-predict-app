<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Csv extends Model
{
    protected $fillable = ["caption", "date", "aws_csv_path"];
}
