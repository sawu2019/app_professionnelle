<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operat extends Model
{
    protected $fillable = [
        'denomination',
            'sigle',
            'description',
            'adresse',
            'nature',
            'raison_sociale',
            'regime_fiscal',
            'annee_creation',
            'annee_fermeture',
            'nbre_surccursale',
            'code_unique',
            'rccm',
            'id_nat',
            'num_ident_fiscal',
            'num_import_export',
            'num_aff_cnss',
            'num_aff_inpp',
            'num_compte_bancaire_interne',
            'num_compte_bancaire_etranger',
            'capital_social',
            'num_tva',
            'num_dgda',
            'num_dgi',
            'num_dgrad',
            'num_occ',
            'boite_postal',
            'num_fax',
            'num_telephone',
            'mail',
            'site_web',
            'statut'      
    ];
}
