<?php

namespace App\Http\Controllers;

use App\arrete;
use App\Filiere;
use App\Fjuridique;
use App\Operat;
use Illuminate\Http\Request;
use App\Province;
use App\Secteur;

class OperatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operats = Operat::with('province')->get();
        return view('operats.index', compact('operats'));
    }
    
    // function pour le secteur artisanal
    public function artisana()
    {
        $operats = Operat::where('secteur_id','1')->get();
        return view('operats.artisanals', compact('operats'));
    }

    // function pour le secteur artisanal
    public function industrie()
    {
        $operats = Operat::where('secteur_id','2')->get();
        return view('operats.industriel', compact('operats'));
    }

     // function pour le secteur artisanal
     public function servi()
     {
         $operats = Operat::where('secteur_id','3')->get();
         return view('operats.service', compact('operats'));
     }

     // function pour les Bureaux d'Etudes Environnemental
     public function bee()
     {
         $operats = Operat::where('filiere_id','1')->get();
         return view('operats.Bureaux_Etudes_Environnemental', compact('operats'));
     }

     // function pour les comptoires
     public function cmp()
     {
         $operats = Operat::where('filiere_id','2')->get();
         return view('operats.Comptoirs', compact('operats'));
     }

     // function pour les cooperatives minieres
     public function cpmn()
     {
         $operats = Operat::where('filiere_id','3')->get();
         return view('operats.Cooperatives_Minieres', compact('operats'));
     }

     // function pour les cooperatives produits carrieres
     public function cppc()
     {
         $operats = Operat::where('filiere_id','4')->get();
         return view('operats.Cooperatives_Produits_Carrieres', compact('operats'));
     }

      // function pour les detenteurs des produits explosifs
      public function detpre()
      {
          $operats = Operat::where('filiere_id','5')->get();
          return view('operats.Detenteurs_Produits_Explosifs', compact('operats'));
      }

      // function pour les entités des traitement
      public function ent()
      {
          $operats = Operat::where('filiere_id','6')->get();
          return view('operats.Entites_traitements', compact('operats'));
      }

      // function pour les laboratoires
      public function lb()
      {
          $operats = Operat::where('filiere_id','7')->get();
          return view('operats.Laboratoires', compact('operats'));
      }

      // function pour les laboratoires
      public function mdt()
      {
          $operats = Operat::where('filiere_id','8')->get();
          return view('operats.Mandataires', compact('operats'));
      }

      // function pour les titulaires des droits miniers
      public function tdm()
      {
          $operats = Operat::where('filiere_id','9')->get();
          return view('operats.Titulaires_droits_miniers', compact('operats'));
      }

      // function pour les titulaires des droits miniers
      public function tpc()
      {
          $operats = Operat::where('filiere_id','10')->get();
          return view('operats.Titulaires_Produits_Carrieres', compact('operats'));
      }

      // function pour les sous traitants
      public function st()
      {
          $operats = Operat::where('filiere_id','11')->get();
          return view('operats.Sous_Traitants', compact('operats'));
      }

      // function pour le forme juridique sa
      public function sa()
      {
          $operats = Operat::where('fjuridique_id','1')->get();
          return view('operats.Societes_Anonyme', compact('operats'));
      }

      // function pour le forme juridique sarl
      public function sarl()
      {
          $operats = Operat::where('fjuridique_id','2')->get();
          return view('operats.Societe_Responsabilite_Limitee', compact('operats'));
      }

      // function pour le forme juridique sarlu
      public function sarlu()
      {
          $operats = Operat::where('fjuridique_id','3')->get();
          return view('operats.Societe_Responsabilite_Limitée_Unipersonelle', compact('operats'));
      }

      // function pour le forme juridique scs
      public function scs()
      {
          $operats = Operat::where('fjuridique_id','4')->get();
          return view('operats.Societe_Commandite_Simple', compact('operats'));
      }

      // function pour le forme juridique sep
      public function sep()
      {
          $operats = Operat::where('fjuridique_id','5')->get();
          return view('operats.Societe_Participation', compact('operats'));
      }

      // function pour le forme juridique sep
      public function gie()
      {
          $operats = Operat::where('fjuridique_id','6')->get();
          return view('operats.Groupement_Interet_Economique', compact('operats'));
      }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Operat::class);
        $provinces = Province::all();
        $secteurs = Secteur::all();
        $filieres = Filiere::all();
        $fjuridiques = Fjuridique::all();
        return view('operats.create', compact('operats','provinces','secteurs','filieres','fjuridiques'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $operat = new Operat([
            'denomination' => $request->get('denomination'),
            'sigle' => $request->get('sigle'),
            'description' => $request->get('description'),
            'adresse' => $request->get('adresse'),
            'nature' => $request->get('nature'),
            'raison_sociale' => $request->get('raison_sociale'),
            'regime_fiscal' => $request->get('regime_fiscal'),
            'annee_creation' => $request->get('annee_creation'),
            'annee_fermeture' => $request->get('annee_fermeture'),
            'nbre_surccursale' => $request->get('nbre_surccursale'),
            'code_unique' => $request->get('code_unique'),
            'rccm' => $request->get('rccm'),
            'id_nat' => $request->get('id_nat'),
            'num_ident_fiscal' => $request->get('num_ident_fiscal'),
            'num_import_export' => $request->get('num_import_export'),
            'num_aff_cnss' => $request->get('num_aff_cnss'),
            'num_aff_inpp' => $request->get('num_aff_inpp'),
            'num_compte_bancaire_interne' => $request->get('num_compte_bancaire_interne'),
            'num_compte_bancaire_etranger' => $request->get('num_compte_bancaire_etranger'),
            'capital_social' => $request->get('capital_social'),
            'num_tva' => $request->get('num_tva'),
            'num_dgda' => $request->get('num_dgda'),
            'num_dgi' => $request->get('num_dgi'),
            'num_dgrad' => $request->get('num_dgrad'),
            'num_occ' => $request->get('num_occ'),
            'boite_postal' => $request->get('boite_postal'),
            'num_fax' => $request->get('num_fax'),
            'num_telephone' => $request->get('num_telephone'),
            'mail' => $request->get('mail'),
            'site_web' => $request->get('site_web'),
            'statut' => $request->get('statut'),
            'province_id' => $request->get('province_id'),
            'secteur_id' => $request->get('secteur_id'),
            'filiere_id' => $request->get('filiere_id'),
            'fjuridique_id' => $request->get('fjuridique_id')
            
        ]);
        $operat->save();
        return redirect('/operats')->with('Succes','Information saved !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Operat  $operat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provinces = Province::all();
        $operat = Operat::find($id);
        return view('operats.show', compact('operat','provinces'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Operat  $operat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('edit',$id);
        $provinces = Province::all();
        $secteurs = Secteur::all();
        $filieres = Filiere::all();
        $fjuridiques = Fjuridique::all();
        $operat = Operat::find($id);
        return view('operats.edit', compact('operat','provinces','secteurs','filieres','fjuridiques'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Operat  $operat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'denomination'=>'required',
            'sigle'=>'required',
            'description'=>'required',
            'adresse'=>'required',
            'nature'=>'required',
            'raison_sociale'=>'required',
            'regime_fiscal'=>'required',
            'annee_creation'=>'required',
            'annee_fermeture'=>'required',
            'nbre_surccursale'=>'required',
            'code_unique'=>'required',
            'rccm'=>'required',
            'id_nat'=>'required',
            'num_ident_fiscal'=>'required',
            'num_import_export'=>'required',
            'num_aff_cnss'=>'required',
            'num_aff_inpp'=>'required',
            'num_compte_bancaire_interne'=>'required',
            'num_compte_bancaire_etranger'=>'required',
            'capital_social'=>'required',
            'num_tva'=>'required',
            'num_dgda'=>'required',
            'num_dgi'=>'required',
            'num_dgrad'=>'required',
            'num_occ'=>'required',
            'boite_postal'=>'required',
            'num_fax'=>'required',
            'num_telephone'=>'required',
            'mail'=>'required',
            'site_web'=>'required',
            'statut'=>'required'
        ]);
            $operat = Operat::find($id);
            $operat->denomination = $request->get('denomination');
            $operat->sigle = $request->get('sigle');
            $operat->description = $request->get('description');
            $operat->adresse = $request->get('adresse');
            $operat->nature = $request->get('nature');
            $operat->raison_sociale = $request->get('raison_sociale');
            $operat->regime_fiscal = $request->get('regime_fiscal');
            $operat->annee_creation = $request->get('annee_creation');
            $operat->annee_fermeture = $request->get('annee_fermeture');
            $operat->nbre_surccursale = $request->get('nbre_surccursale');
            $operat->code_unique = $request->get('code_unique');
            $operat->rccm = $request->get('rccm');
            $operat->id_nat = $request->get('id_nat');
            $operat->num_ident_fiscal = $request->get('num_ident_fiscal');
            $operat->num_import_export = $request->get('num_import_export');
            $operat->num_aff_cnss = $request->get('num_aff_cnss');
            $operat->num_aff_inpp = $request->get('num_aff_inpp');
            $operat->num_compte_bancaire_interne = $request->get('num_compte_bancaire_interne');
            $operat->num_compte_bancaire_etranger = $request->get('num_compte_bancaire_etranger');
            $operat->capital_social = $request->get('capital_social');
            $operat->num_tva = $request->get('num_tva');
            $operat->num_dgda = $request->get('num_dgda');
            $operat->num_dgi = $request->get('num_dgi');
            $operat->num_dgrad = $request->get('num_dgrad');
            $operat->num_occ = $request->get('num_occ');
            $operat->boite_postal = $request->get('boite_postal');
            $operat->num_fax = $request->get('num_fax');
            $operat->num_telephone = $request->get('num_telephone');
            $operat->mail = $request->get('mail');
            $operat->site_web = $request->get('site_web');
            $operat->statut = $request->get('statut');
            $operat->save();

            return redirect('/operats')->with('message', 'Modification Effectuer avec succès!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Operat  $operat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete',$id);
        $operat = Operat::find($id);
        $operat->delete();
        return redirect('/operats')->with('Reussi', 'Suppression Effectuer!');
    }
}
