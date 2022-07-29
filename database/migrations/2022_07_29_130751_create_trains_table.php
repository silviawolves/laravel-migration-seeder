<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 20)->nullable();
            $table->string('stazione_di_partenza', 50);
            $table->string('stazione_di_arrivo', 50);
            $table->time('orario_di_partenza', 0);
            $table->time('orario_di_arrivo', 0);
            $table->smallInteger('codice_treno')->unsigned();
            $table->tinyInteger('numero_carrozze')->unsigned();
            $table->boolean('in_orario')->default(1);
            $table->boolean('cancellato')->default(0);
            $table->tinyInteger('binario')->unsigned();
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
        Schema::dropIfExists('trains');
    }
}
