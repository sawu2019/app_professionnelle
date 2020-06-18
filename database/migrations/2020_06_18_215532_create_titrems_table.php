<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitremsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titrems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('operat_id');
            $table->string('permis');
            $table->string('titusite');
            $table->string('typepermis');
            $table->string('statut');
            $table->string('carrem');
            $table->string('localisation');
            $table->string('dateoctroi');
            $table->string('dateexp');
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
        Schema::dropIfExists('titrems');
    }
}
