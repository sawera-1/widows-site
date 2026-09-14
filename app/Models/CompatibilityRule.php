<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompatibilityRule extends Model
{
    use HasFactory;

    protected $fillable = [
        'design_id',
        'option_id',
        'is_compatible',
    ];

    public function design()
    {
        return $this->belongsTo(WindowDoorDesign::class);
    }

    public function option()
    {
        return $this->belongsTo(ConfigurationOption::class);
    }
}
