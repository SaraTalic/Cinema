<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time');
            $table->integer('tickets');
            $table->integer('available_tickets');
            $table->integer('price');
            $table->foreignId('movie_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('usersreservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('number_of_tickets');
            $table->integer('total_price');
            $table->unsignedBigInteger('event_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('event_id')
                ->references('id')
                ->on('events')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('reservations');
    }
};