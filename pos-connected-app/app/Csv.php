<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Csv extends Model
{
    protected $fillable = ["year", "month", "date", "aws_path"];
}
