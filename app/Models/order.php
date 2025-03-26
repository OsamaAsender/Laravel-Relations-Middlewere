<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = [
        'order_number',
        'total_amount',
        'status',
        'notes'
    ];
    public function products()
{
    return $this->belongsToMany(Product::class, 'order_items')
                ->withPivot('quantity', 'total_price')
                ->withTimestamps();
}

}
