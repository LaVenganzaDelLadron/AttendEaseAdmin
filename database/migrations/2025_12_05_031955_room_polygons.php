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
        Schema::create('room_polygons', function (Blueprint $table) {
            $table->increments('room_polygonid');
            $table->unsignedInteger('room_id');
            $table->double('latitude');
            $table->double('longitude');
            $table->integer('point_order');
            $table->timestamps();

            $table->foreign('room_id')
                ->references('room_id')
                ->on('rooms')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::dropIfExists('room_polygons');
    }
};
