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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('case_study_category_id');
            $table->string('name');
            $table->text(column: 'sector');
            $table->text('challenges');
            $table->text('services');
            $table->string('thumbnail');
            $table->string('slug');
            $table->boolean('status')->default(true);
            $table->fullText(['name', 'sector', 'challenges', 'services']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};
