<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WindowDoorDesign extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'slug',
        'description',
        'frame_configuration',
        'pane_configuration',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'frame_configuration' => 'array',
        'pane_configuration' => 'array',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
