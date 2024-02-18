<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Contracts\Service\Attribute\Required;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->longText('title_ne')->nullable();
            $table->longText('title_en')->nullable();
            $table->string('des_ne')->nullable();
            $table->string('des_en')->nullable();
            $table->string('upload_date_bs')->nullable();
            $table->string('upload_date_ad')->nullable();
            $table->string('video')->nullable();
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
        Schema::dropIfExists('videos');
    }
};
