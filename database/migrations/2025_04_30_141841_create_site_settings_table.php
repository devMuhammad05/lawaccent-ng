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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->date('privacy_notice_effective_date')->default(now());
            $table->date('cookie_notice_effective_date')->default(now());
            $table->string('application_form_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->boolean('schoolarship_application_status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
