<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatiekalaiTable extends Migration
{
    public function up()
    {
        Schema::create('patiekalai', function (Blueprint $table) {
            $table->id();
            $table->string('pavadinimas');
            $table->string('aprasymas');
            $table->decimal('kaina', 8, 2);
            $table->unsignedBigInteger('valgiarastis_id');
            $table->foreign('valgiarastis_id')->references('id')->on('valgiarasciai');
            // Kitos reikalingos lentelės stulpelio(s)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patiekalai');
    }
}
