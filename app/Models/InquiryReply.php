<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InquiryReply extends Model
{
    use HasFactory;

    protected $fillable = [
        'enquiry_id',
        'admin_id',
        'message',
        'recipient_email',
        'subject',
        'status',
    ];

    public function enquiry()
    {
        return $this->belongsTo(Enquiry::class);
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
