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
        Schema::create('class_sessions', function (Blueprint $table) {
            $table->increments('session_id');
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('room_id');
            $table->string('teacher_id', 50);

            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->date('session_date');

            $table->enum('session_status', ['active', 'ended', 'pending'])->default('pending');

            $table->string('qr_code', 255)->nullable();
            $table->boolean('qr_valid')->default(false);
            $table->integer('allowance_time')->nullable();

            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

            $table->foreign('subject_id')->references('subject_id')->on('subjects');
            $table->foreign('room_id')->references('room_id')->on('rooms');
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers');

            $table->unique(
                ['teacher_id', 'session_date', 'start_time', 'end_time'],
                'teacher_schedule_unique'
            );

            $table->unique(
                ['room_id', 'session_date', 'start_time', 'end_time'],
                'room_schedule_unique'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_sessions');
    }
};
