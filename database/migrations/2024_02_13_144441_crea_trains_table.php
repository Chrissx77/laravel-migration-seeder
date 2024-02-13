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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('azienda', 60);
            $table->string('stazione_partenza', 60);
            $table->string('stazione_arrivo', 60);
            $table->string('orario_partenza', 30);
            $table->string('orario_arrivo', 30);
            $table->string('codice_treno', 15);
            $table->integer('num_carrozze');
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);

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
        //
    }
};
