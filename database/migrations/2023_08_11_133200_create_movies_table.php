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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('duration');
            $table->string('actors');
            $table->string('director');
            $table->string('logo');
            $table->date('premiere');
            $table->enum('on_air', ['yes', 'no']);
            $table->enum('trending', ['yes', 'no']);
            $table->longText('description');
            $table->longText('small_description');
            $table->string('time')->nullable();
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
        Schema::dropIfExists('movies');
    }
};