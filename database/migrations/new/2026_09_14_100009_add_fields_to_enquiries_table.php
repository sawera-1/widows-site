<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('enquiries', function (Blueprint $table) {
            $table->boolean('read_status')->default(false)->after('status');
            $table->string('reply_status', 50)->default('Not Replied')->after('read_status');
            $table->timestamp('replied_at')->nullable()->after('reply_status');
            $table->text('admin_notes')->nullable()->after('replied_at');
        });
    }

    public function down()
    {
        Schema::table('enquiries', function (Blueprint $table) {
            $table->dropColumn(['read_status', 'reply_status', 'replied_at', 'admin_notes']);
        });
    }
};
