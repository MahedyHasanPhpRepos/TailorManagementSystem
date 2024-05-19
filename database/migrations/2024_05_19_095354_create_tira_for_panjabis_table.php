<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tira_for_panjabis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('panjabi_measurement_id')->constrained('panjabi_measurements')->cascadeOnDelete();
            $table->string('tira_name')->nullable() ; 
            $table->string('cloth_order_id') ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tira_for_panjabis');
    }
};
