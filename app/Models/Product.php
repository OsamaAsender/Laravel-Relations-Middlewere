<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'category_name',
        'image',
        'price'
    ];

    public function orders()
{
    return $this->belongsToMany(Order::class, 'order_items')
                ->withPivot('quantity', 'total_price')
                ->withTimestamps();
}

    
}
