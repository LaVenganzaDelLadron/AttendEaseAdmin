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
        Schema::create('students', function (Blueprint $table) {
            $table->string('student_id')->primary();
            $table->string('firebase_uid')->unique();
            $table->unsignedInteger('course_id')->nullable();
            $table->string('email')->unique();
            $table->string('contact_number', 20)->nullable();
            $table->string('firstname', 100);
            $table->string('middlename',100)->nullable();
            $table->string('lastname', 100);
            $table->integer('year')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->enum('status', ['active', 'inactive', 'suspended'])->default('inactive');

            $table->foreign('course_id')->references('course_id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
