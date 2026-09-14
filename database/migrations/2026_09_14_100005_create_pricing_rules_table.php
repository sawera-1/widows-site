<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pricing_rules', function (Blueprint $table) {
            $table->id();
            $table->string('rule_type'); // e.g. size_adjustment, area_multiplier
            $table->integer('min_width')->nullable();
            $table->integer('max_width')->nullable();
            $table->integer('min_height')->nullable();
            $table->integer('max_height')->nullable();
            $table->decimal('min_area', 10, 4)->nullable();
            $table->decimal('max_area', 10, 4)->nullable();
            $table->decimal('price_adjustment', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pricing_rules');
    }
};
