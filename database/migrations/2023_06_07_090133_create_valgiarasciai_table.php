<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValgiarasciaiTable extends Migration
{
    public function up()
    {
        Schema::create('valgiarasciai', function (Blueprint $table) {
            $table->id();
            $table->string('pavadinimas');
            $table->date('data');
            $table->unsignedBigInteger('maitinimo_istaigas_id');
            $table->foreign('maitinimo_istaigas_id')->references('id')->on('maitinimo_istaigas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('valgiarasciai');
    }
}
