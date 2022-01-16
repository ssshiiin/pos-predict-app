<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ["category_id", "product", "order_quantity", "stock"];
    protected $table = "products";

    // リレーション
    public function productPredicts(){
        return $this->hasMany('App\Product_predict', 'product_id');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
