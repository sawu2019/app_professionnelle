<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArretesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arretes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('typearrete_id');
            $table->string('titre');
            $table->string('annees');
            $table->string('fichier');
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
        Schema::dropIfExists('arretes');
    }
}
