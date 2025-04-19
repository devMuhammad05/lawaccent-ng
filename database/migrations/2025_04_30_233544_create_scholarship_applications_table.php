<?php

use App\Enums\Enums\Eligibility;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('scholarship_applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->enum('eligibility_status', Eligibility::values());
            $table->date('graduation_date');
            $table->string('degree_classification');
            $table->string('cgpa');
            $table->string('scholarship_details');
            $table->string('transcript_doc')->nullable();
            $table->string('essay_doc')->nullable();
            $table->string('cv_doc')->nullable();
            $table->boolean('is_read')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarship_applications');
    }
};
