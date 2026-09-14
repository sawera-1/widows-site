<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_key',
        'title',
        'content',
        'is_active',
        'sort_order',
    ];
}
