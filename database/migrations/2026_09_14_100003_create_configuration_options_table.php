<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('configuration_options', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // colour, glass, handle, hinge, vent, blind
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price_adjustment', 10, 2)->default(0);
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('configuration_options');
    }
};
