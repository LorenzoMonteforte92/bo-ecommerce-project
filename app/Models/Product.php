<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'quantity',
        'category',
        'description'
    ];
    public function orders() {
        return $this->belongsToMany(Order::class, 'order_product');
    }
}
