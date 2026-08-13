<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->datetime('date_from')->nullable();
            $table->datetime('date_to')->nullable();
            $table->integer('number_of_guest')->nullable();
            $table->integer('number_of_room')->nullable();
            $table->string('destination')->nullable();
            $table->integer('price')->nullable();
            $table->integer('status')->nullable();
            $table->integer('status_one')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
