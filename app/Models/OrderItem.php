<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_name',
        'design_slug',
        'width',
        'height',
        'quantity',
        'unit_price',
        'line_total',
        'configuration_json',
    ];

    protected $casts = [
        'configuration_json' => 'array',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
