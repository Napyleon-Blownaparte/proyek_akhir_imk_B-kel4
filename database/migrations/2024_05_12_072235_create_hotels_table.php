<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id('id');
            $table->string('hotel_name');
            $table->integer('hotel_star');
            $table->string('hotel_city');
            $table->string('hotel_category');
            $table->string('hotel_address');
            $table->float('hotel_rating');
            $table->integer('hotel_start_price');
            $table->integer('review_count');
            $table->string('hotel_image1');
            $table->string('hotel_image2');
            $table->string('hotel_image3');
            $table->string('room_image1');
            $table->string('room_image2');
            $table->string('room_image3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
