<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaitinimoIstaigasTable extends Migration
{
    public function up()
    {
        Schema::create('maitinimo_istaigas', function (Blueprint $table) {
            $table->id();
            $table->string('pavadinimas');
            $table->string('adresas');
            // Kitos reikalingos lentelės stulpelio(s)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('maitinimo_istaigas');
    }
}
