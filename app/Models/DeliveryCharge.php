<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryCharge extends Model
{
    use HasFactory;

    protected $fillable = [
        'delivery_area_id',
        'delivery_method_id',
        'charge',
        'is_active',
    ];

    public function area()
    {
        return $this->belongsTo(DeliveryArea::class, 'delivery_area_id');
    }

    public function method()
    {
        return $this->belongsTo(DeliveryMethod::class, 'delivery_method_id');
    }
}
