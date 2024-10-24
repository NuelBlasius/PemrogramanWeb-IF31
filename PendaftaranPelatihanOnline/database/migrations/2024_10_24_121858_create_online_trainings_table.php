<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
    public function up()
    {
        Schema::create('online_trainings', function (Blueprint $table) {
            $table->id();
            $table->string('participant_name');
            $table->string('training_name');
            $table->date('training_date');
            $table->string('location');
            $table->string('category');
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_trainings');
    }
};
