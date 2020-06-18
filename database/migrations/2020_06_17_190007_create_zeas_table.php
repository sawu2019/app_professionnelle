<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zeas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('province_id');
            $table->string('filie');
            $table->string('narrete');
            $table->string('qualification');
            $table->string('transformation');
            $table->string('annee');
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
        Schema::dropIfExists('zeas');
    }
}
