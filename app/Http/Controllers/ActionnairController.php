<?php

namespace App\Http\Controllers;

use App\Actionnair;
use App\Pay;
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
        $actionnaires = Actionnair::with('pay')->get();
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
        $actionnaires = Actionnair::all();
        $pays = Pay::all();
        return view('actionnaires.create',compact('actionnaires','pays'));
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
            'proprietaire' => $request->get('proprietaire'),
            'pay_id' => $request->get('pay_id')

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
        $pays = Pay::all();
        return view('actionnaires.show', compact('actionnaire','pays'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actionnair  $actionnair
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('edit', Actionnair::class);
        $actionnaire = Actionnair::find($id);
        $pays = Pay::all();
        return view('actionnaires.edit', compact('actionnaire','pays'));
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
        $actionnaire->pay_id = $request->get('pay_id');
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
        $this->authorize('delete',$id);
        $actionnaire = Actionnair::find($id);
        $actionnaire->delete();

        return redirect('/actionnaires')->with('Reussi', 'Suppression Effectuer!');
    }
}
