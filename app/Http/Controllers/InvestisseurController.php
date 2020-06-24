<?php

namespace App\Http\Controllers;

use App\Investisseur;
use App\Pay;
use App\Tinvestisseur;
use Illuminate\Http\Request;

class InvestisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investisseurs = Investisseur::with('tinvestisseur')->get();
        return view('investisseurs.index', compact('investisseurs'));
    }
    // function pour investisseur etranger
    public function etr()
    {
        $investisseurs = Investisseur::where('tinvestisseur_id','1')->get();
        return view('investisseurs.Etranger', compact('investisseurs'));
    }

    // function pour investisseur public
    public function pub()
    {
        $investisseurs = Investisseur::where('tinvestisseur_id','2')->get();
        return view('investisseurs.Public', compact('investisseurs'));
    }

    // function pour investisseur privee
    public function pri()
    {
        $investisseurs = Investisseur::where('tinvestisseur_id','3')->get();
        return view('investisseurs.Privee', compact('investisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Investisseur::class);
        $tinvestisseurs = Tinvestisseur::all();
        $pays = Pay::all();
        return view('investisseurs.create',compact('investisseurs','tinvestisseurs','pays'));
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
            'nom'=>'required',
            'sigle'=>'required',
            'syboursier'=>'required',
            'siege'=>'required',
            'telephone'=>'required',
            'fax'=>'required',
            'bpostale'=>'required',
            'ceo'=>'required',
            'mail'=>'required',
            'sweb'=>'required',
            'proprietaire'=>'required'
            
        ]);
        $investisseure = new Investisseur([
            'nom' => $request->get('nom'),
            'sigle' => $request->get('sigle'),
            'syboursier' => $request->get('syboursier'),
            'siege' => $request->get('siege'),
            'telephone' => $request->get('telephone'),
            'fax' => $request->get('fax'),
            'bpostale' => $request->get('bpostale'),
            'ceo' => $request->get('ceo'),
            'mail' => $request->get('mail'),
            'sweb' => $request->get('sweb'),
            'proprietaire' => $request->get('proprietaire'),
            'tinvestisseur_id' => $request->get('tinvestisseur_id'),
            'pay_id' => $request->get('pay_id')

        ]);
        $investisseure->save();
        return redirect('/investisseurs')->with('Succes','Investisseurs saved !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Investisseur  $investisseur
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $investisseure = Investisseur::find($id);
        $pays = Pay::all();
        return view('investisseurs.show', compact('investisseure','pays'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Investisseur  $investisseur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $investisseure = Investisseur::find($id);
        $tinvestisseurs = Tinvestisseur::all();
        $pays = Pay::all();
        return view('investisseurs.edit', compact('investisseure','pays','tinvestisseurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Investisseur  $investisseur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom'=>'required',
            'sigle'=>'required',
            'syboursier'=>'required',
            'siege'=>'required',
            'telephone'=>'required',
            'fax'=>'required',
            'bpostale'=>'required',
            'ceo'=>'required',
            'mail'=>'required',
            'sweb'=>'required',
            'proprietaire'=>'required'
        ]);
        $investisseure = Investisseur::find($id);
        $investisseure->nom =  $request->get('nom');
        $investisseure->sigle = $request->get('sigle');
        $investisseure->syboursier = $request->get('syboursier');
        $investisseure->siege =  $request->get('siege');
        $investisseure->telephone = $request->get('telephone');
        $investisseure->fax = $request->get('fax');
        $investisseure->bpostale =  $request->get('bpostale');
        $investisseure->ceo = $request->get('ceo');
        $investisseure->mail = $request->get('mail');
        $investisseure->sweb =  $request->get('sweb');
        $investisseure->proprietaire = $request->get('proprietaire');
        $investisseure->pay_id = $request->get('pay_id');
        $investisseure->save();

        return redirect('/investisseurs')->with('Reussi', 'Modification Effectuer!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Investisseur  $investisseur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', $id);
        $investisseure = Investisseur::find($id);
        $investisseure->delete();

        return redirect('/investisseurs')->with('Reussi', 'Suppression Effectuer!');
    }
}
