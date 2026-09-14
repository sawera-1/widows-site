<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('delivery_charges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('delivery_area_id')->constrained('delivery_areas')->onDelete('cascade');
            $table->foreignId('delivery_method_id')->constrained('delivery_methods')->onDelete('cascade');
            $table->decimal('charge', 10, 2);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('delivery_charges');
    }
};
