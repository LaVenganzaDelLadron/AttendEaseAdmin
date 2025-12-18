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
        Schema::create('attendance', function (Blueprint $table) {
            $table->increments('attendance_id');

            $table->unsignedInteger('session_id')->nullable();
            $table->string('student_id', 50)->nullable();

            $table->string('name', 255)->nullable();
            $table->time('time_scanned')->nullable();
            $table->enum('status', ['present', 'absent', 'late'])->nullable();

            $table->string('confidence', 50)->nullable();
            $table->integer('late_duration')->nullable();
            $table->integer('total_outside_time')->nullable();
            $table->boolean('qr_valid')->nullable();

            $table->date('attendance_date')->nullable();
            $table->timestamps();

            $table->foreign('session_id')->references('session_id')->on('class_sessions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::dropIfExists('attendance');
    }
};
