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
        Schema::create('about_us_metrics', function (Blueprint $table) {
            $table->id();
            $table->string('year')->default(2016);
            $table->integer('number_of_offices')->default(4);
            $table->integer('number_of_clients')->default(1000);
            $table->integer('number_of_scholarships')->default(2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us_metrics');
    }
};
