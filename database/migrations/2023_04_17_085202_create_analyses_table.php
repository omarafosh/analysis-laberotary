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
        Schema::create('analyses', function (Blueprint $table) {
            $table->id();
            $table->string('analysis_name');
            $table->decimal('analysis_salary',10,2,true);
            $table->text('analysis_Description');
            $table->string('analysis_metrics');
            $table->unsignedInteger('analysis_order');
            $table->enum('analysis_gender',[1,0])->default(0);
            $table->unsignedInteger('analysis_min');
            $table->unsignedInteger('analysis_max');
            $table->foreignId('group_id')->on('groups')->onDelete('cascade');
            $table->foreignId('unit_id')->on('units')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analyses');
    }
};
