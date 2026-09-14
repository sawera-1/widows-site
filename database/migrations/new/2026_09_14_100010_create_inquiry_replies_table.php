<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('inquiry_replies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enquiry_id')->constrained('enquiries')->onDelete('cascade');
            $table->foreignId('admin_id')->nullable()->constrained('users')->nullOnDelete();
            $table->text('message');
            $table->string('recipient_email');
            $table->string('subject');
            $table->string('status', 50)->default('Sent');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inquiry_replies');
    }
};
