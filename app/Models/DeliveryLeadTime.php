<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryLeadTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_type',
        'delivery_time',
        'collection_time',
        'is_active',
        'sort_order',
    ];
}
