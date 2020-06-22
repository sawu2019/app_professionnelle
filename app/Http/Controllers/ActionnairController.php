<?php

namespace App\Http\Controllers;

use App\Actionnair;
use Illuminate\Http\Request;

class ActionnairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actionnaires = Actionnair::all();
        return view('actionnaires.index', compact('actionnaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Actionnair::class);
        return view('actionnaires.create');
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
            'prenom'=>'required',
            'proprietaire'=>'required'
        ]);
        $actionnaire = new Actionnair([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'proprietaire' => $request->get('proprietaire')

        ]);
        $actionnaire->save();
        return redirect('/actionnaires')->with('Succes','Actionnaire saved !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actionnair  $actionnair
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actionnaire = Actionnair::find($id);
        return view('actionnaires.show', compact('actionnaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actionnair  $actionnair
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actionnaire = Actionnair::find($id);
        return view('actionnaires.edit', compact('actionnaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actionnair  $actionnair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'proprietaire'=>'required'
        ]);
        $actionnaire = Actionnair::find($id);
        $actionnaire->nom =  $request->get('nom');
        $actionnaire->prenom = $request->get('prenom');
        $actionnaire->proprietaire = $request->get('proprietaire');
        $actionnaire->save();

        return redirect('/actionnaires')->with('Reussi', 'Modification Effectuer!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actionnair  $actionnair
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', $id);
        $actionnaire = Actionnair::find($id);
        $actionnaire->delete();

        return redirect('/actionnaires')->with('Reussi', 'Suppression Effectuer!');
    }
}
