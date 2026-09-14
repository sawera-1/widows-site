<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'base_price',
        'estimated_lead_time',
        'is_active',
        'sort_order',
    ];

    public function charges()
    {
        return $this->hasMany(DeliveryCharge::class);
    }
}
