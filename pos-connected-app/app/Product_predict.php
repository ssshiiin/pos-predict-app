<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_predict extends Model
{
    protected $fillable = ["product_id", "year", "month", "week_num", "week", "predict"];
    protected $table = "product_predicts";

    //リレーション
    public function product(){
        return $this->belongsTo('App\Product');
    }
}
