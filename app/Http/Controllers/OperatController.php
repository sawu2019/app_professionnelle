<?php

namespace App\Http\Controllers;

use App\Operat;
use Illuminate\Http\Request;

class OperatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operats = Operat::all();
        return view('operats.index', compact('operats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Operat::class);
        return view('operats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            'statut' => $request->get('statut')

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
        $operat = Operat::find($id);
        return view('operats.show', compact('operat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Operat  $operat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $operat = Operat::find($id);
        return view('operats.edit', compact('operat'));
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
            $operat->description = $request->get('adresse');
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

            return redirect('/operats')->with('Reussi', 'Modification Effectuer!');

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
