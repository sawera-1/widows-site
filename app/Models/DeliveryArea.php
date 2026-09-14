<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryArea extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'postcode_rule',
        'is_active',
    ];

    public function charges()
    {
        return $this->hasMany(DeliveryCharge::class);
    }
}
