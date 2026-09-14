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
        'category',
        'description',
        'base_price',
        'image',
        'is_active',
        'sort_order',
    ];

    public function designs()
    {
        return $this->hasMany(WindowDoorDesign::class);
    }
}
