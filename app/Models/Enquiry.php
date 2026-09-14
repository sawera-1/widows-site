<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'attachment',
        'status',
        'read_status',
        'reply_status',
        'admin_notes',
        'replied_at',
    ];

    protected $casts = [
        'read_status' => 'boolean',
        'replied_at' => 'datetime',
    ];

    public function replies()
    {
        return $this->hasMany(InquiryReply::class);
    }
}
