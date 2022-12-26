<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }


    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
