<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Video extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('video', function (Blueprint $table){
         $table->bigIncrements('id');
         $table->text('title');
         $table->longText('description')->nullable();
         $table->text('file');
         $table->date('u_date');
         $table->date('u_date_ad');
         $table->time('u_time');
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
        Schema::dropIfExists('video');
    }
}
