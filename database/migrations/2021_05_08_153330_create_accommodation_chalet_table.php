<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccommodationChaletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommodation_chalet', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chalet_id');
            $table->unsignedBigInteger('accommodation_id');

            $table->foreign('chalet_id')->references('id')
            ->on('chalets')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            
            $table->foreign('accommodation_id')->references('id')
            ->on('accommodations')
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
        Schema::dropIfExists('accommodation_chalet');
    }
}
