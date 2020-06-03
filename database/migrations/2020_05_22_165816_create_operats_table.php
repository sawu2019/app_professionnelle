<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('secteur_id');
            $table->string('denomination');
            $table->string('sigle');
            $table->string('description');
            $table->string('adresse');
            $table->string('nature');
            $table->string('raison_sociale');
            $table->string('regime_fiscal');
            $table->string('annee_creation');
            $table->string('annee_fermeture');
            $table->string('nbre_surccursale');
            $table->string('code_unique');
            $table->string('rccm');
            $table->string('id_nat');
            $table->string('num_ident_fiscal');
            $table->string('num_import_export');
            $table->string('num_aff_cnss');
            $table->string('num_aff_inpp');
            $table->string('num_compte_bancaire_interne');
            $table->string('num_compte_bancaire_etranger');
            $table->string('capital_social');
            $table->string('num_tva');
            $table->string('num_dgda');
            $table->string('num_dgi');
            $table->string('num_dgrad');
            $table->string('num_occ');
            $table->string('boite_postal');
            $table->string('num_fax');
            $table->string('num_telephone');
            $table->string('mail');
            $table->string('site_web');
            $table->string('statut');
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
        Schema::dropIfExists('operats');
    }
}
