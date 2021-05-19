<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('adult');
            $table->integer('child');
            $table->double('price',8,2);
            $table->integer('size');
            $table->string('detail');
            $table->unsignedBigInteger('chalet_id');
            $table->unsignedBigInteger('bedroom_id');
            $table->unsignedBigInteger('bed_id');

            $table->foreign('chalet_id')->references('id')->on('chalets')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('bedroom_id')->references('id')->on('bedrooms')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('bed_id')->references('id')->on('beds')->onUpdate('cascade')->onDelete('cascade');
            
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
        Schema::dropIfExists('rooms');
    }
}
