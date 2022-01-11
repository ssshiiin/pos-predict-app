<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Next_order extends Model
{
    protected $fillable = ["product_id", "year", "month", "week_num", "week", "next_order"];
    protected $table = "next_orders";

    //リレーション
    public function product(){
        return $this->belongsTo('App\Product');
    }
}
