<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'user_id',
        'status',
        'payment_status',
        'first_name',
        'last_name',
        'email',
        'phone',
        'billing_address',
        'billing_city',
        'billing_county',
        'billing_postcode',
        'billing_country',
        'delivery_method',
        'delivery_address',
        'subtotal',
        'delivery_cost',
        'tax',
        'discount',
        'total',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
