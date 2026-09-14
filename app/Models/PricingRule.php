<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingRule extends Model
{
    use HasFactory;

    protected $fillable = [
        'rule_type',
        'min_width',
        'max_width',
        'min_height',
        'max_height',
        'min_area',
        'max_area',
        'price_adjustment',
    ];
}
