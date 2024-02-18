<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mantri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantri', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->date('u_date');
            $table->date('u_date_ad');
            $table->time('u_time');
            $table->text('title');
            $table->string('photo','255');
            $table->longText('description');
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
        Schema::dropIfExists('mantri');
    }
}
