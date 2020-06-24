<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investisseurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('tinvestisseur_id');
            $table->unsignedInteger('pay_id');
            $table->string('nom');
            $table->string('sigle');
            $table->string('syboursier');
            $table->string('siege');
            $table->string('telephone');
            $table->string('fax');
            $table->string('bpostale');
            $table->string('ceo');
            $table->string('mail');
            $table->string('sweb');
            $table->string('proprietaire');
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
        Schema::dropIfExists('investisseurs');
    }
}
