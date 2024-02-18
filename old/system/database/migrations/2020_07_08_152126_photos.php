<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Photos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('gallery_id')->unsigned();
           $table->foreign('gallery_id')->references('id')->on('gallery')->onDelete('cascade');
            $table->string('photo','255');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photo');
    }
}
