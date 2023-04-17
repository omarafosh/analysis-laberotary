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
        Schema::create('sicks', function (Blueprint $table) {
            $table->id();
            $table->string('sick_name');
            $table->unsignedTinyInteger('sick_age');
            $table->enum('sick_gender',[1,0])->default(0);
            $table->foreignId('doctor_id')->on('doctors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sicks');
    }
};
