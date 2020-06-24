<?php

namespace App\Http\Controllers;

use App\Operat;
use App\Permi;
use App\Projet;
use App\Stade;
use App\Tprojet;
use Illuminate\Http\Request;


class ProjetController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::all();
        return view('projets.index', compact('projets'));
    }

    // function pour projet à grande echelle
    public function gech()
    {
        $projets = Projet::where('tprojet_id','1')->get();
        return view('projets.Grande_Echelle', compact('projets'));
    }

    // function pour projet à petite echelle
    public function pech()
    {
        $projets = Projet::where('tprojet_id','2')->get();
        return view('projets.Petite_Echelle', compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Projet::class);
        $permis = Permi::all();
        $stades = Stade::all();
        $tprojets = Tprojet::all();
        $operats = Operat::all();
        return view('projets.create', compact('projets','permis','stades','tprojets','operats'));
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
            'tmines'=>'required'
        ]);
        $projets = new Projet([
            'nom' => $request->get('nom'),
            'tmines' => $request->get('tmines'),
            'permi_id' => $request->get('permi_id'),
            'stade_id' => $request->get('stade_id'),
            'tprojet_id' => $request->get('tprojet_id'),
            'operat_id' => $request->get('operat_id')
        ]);
        $projets->save();
        return redirect('/projets')->with('Succes','Projet saved !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permis = Permi::all();
        $stades = Stade::all();
        $tprojets = Tprojet::all();
        $operats = Operat::all();
        $projet = Projet::find($id);
        return view('projets.show', compact('projets','permis','stades','tprojets','operats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('create',Projet::class);
        $permis = Permi::all();
        $stades = Stade::all();
        $tprojets = Tprojet::all();
        $operats = Operat::all();
        $projet = Projet::find($id);
        return view('projets.edit', compact('projet','permis','stades','tprojets','operats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom'=>'required',
            'tmines'=>'required'
        ]);

        $projet = Projet::find($id);
        $projet->nom =  $request->get('nom');
        $projet->tmines = $request->get('tmines');
        $projet->permi_id = $request->get('permi_id');
        $projet->stade_id = $request->get('stade_id');
        $projet->tprojet_id = $request->get('tprojet_id');
        $projet->operat_id = $request->get('operat_id');
        $projet->save();

        return redirect('/projets')->with('success', 'Projet updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete',$id);
        $projet = Projet::find($id);
        $projet->delete();
        return redirect('/projets')->with('success', 'Projet deleted!');
    }
}
