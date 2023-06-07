<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUzsakymaiTable extends Migration
{
    public function up()
    {
        Schema::create('uzsakymai', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patiekalo_id');
            $table->foreign('patiekalo_id')->references('id')->on('patiekalai');
            $table->unsignedBigInteger('vartotojo_id');
            $table->foreign('vartotojo_id')->references('id')->on('users');
            $table->integer('kiekis');
            $table->decimal('kaina', 8, 2);
            $table->boolean('patvirtintas')->default(false);
            // Kitos reikalingos lentelės stulpelio(s)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('uzsakymai');
    }
}
