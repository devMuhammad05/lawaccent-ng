<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('title');
            $table->string('sub_heading');
            $table->string('thumbnail');
            $table->string('hero_image')->nullable();
            $table->longText('body');
            $table->boolean('status')->default(true);
            $table->string('slug');
            $table->unsignedBigInteger('downloads')->default(0);
            $table->fullText(['title', 'sub_heading', 'body']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
