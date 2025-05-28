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
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->text('bio')->nullable();
            $table->string('profile_image')->nullable();
            
            // Academic Information
            $table->json('subjects'); // Array of subjects ["Math", "Physics", etc.]
            $table->json('levels'); // Array of levels ["Elementary", "High School", etc.]
            $table->string('education')->nullable();
            $table->integer('experience_years')->default(0);
            
            // Pricing & Availability
            $table->decimal('hourly_rate', 8, 2);
            $table->decimal('min_rate', 8, 2)->nullable();
            $table->decimal('max_rate', 8, 2)->nullable();
            $table->json('availability')->nullable(); // Days/times available
            $table->boolean('is_available')->default(true);
            
            // Location
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->default('Cambodia');
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->boolean('online_tutoring')->default(false);
            $table->boolean('in_person_tutoring')->default(true);
            
            // Rating & Reviews
            $table->decimal('rating', 3, 2)->default(0.00);
            $table->integer('total_reviews')->default(0);
            $table->integer('total_students')->default(0);
            
            // Status
            $table->boolean('is_verified')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamp('last_active_at')->nullable();
            
            $table->timestamps();
            
            // Indexes for better search performance
            $table->index(['is_active', 'is_available']);
            $table->index(['city', 'state']);
            $table->index(['hourly_rate']);
            $table->index(['rating']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutors');
    }
};
