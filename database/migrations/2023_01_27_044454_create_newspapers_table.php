<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newspapers', function (Blueprint $table) {
            $table->id();
            $table->longText('title_ne')->nullable();
            $table->longText('title_en')->nullable();
            $table->longText('des_ne')->nullable();
            $table->longText('des_en')->nullable();
            $table->string('upload_date_bs')->nullable();
            $table->string('upload_date_ad')->nullable();
            $table->string('photo')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('newspapers');
    }
};
