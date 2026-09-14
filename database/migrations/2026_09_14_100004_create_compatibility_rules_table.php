<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('compatibility_rules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('design_id')->constrained('window_door_designs')->onDelete('cascade');
            $table->foreignId('option_id')->constrained('configuration_options')->onDelete('cascade');
            $table->boolean('is_compatible')->default(true);
            $table->timestamps();
            
            $table->unique(['design_id', 'option_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('compatibility_rules');
    }
};
