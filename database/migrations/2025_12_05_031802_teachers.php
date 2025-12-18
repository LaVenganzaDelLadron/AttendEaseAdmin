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
        Schema::create('teachers', function (Blueprint $table) {
            $table->string('teacher_id')->primary();
            $table->string('firebase_uid')->unique();
            $table->string('email')->unique();
            $table->string('contact_number', 20)->nullable();
            $table->string('firstname', 100);
            $table->string('middlename',100)->nullable();
            $table->string('lastname', 100);
            $table->timestamp('created_at')->useCurrent();
            $table->enum('status', ['active', 'inactive', 'suspended'])->default('inactive');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
