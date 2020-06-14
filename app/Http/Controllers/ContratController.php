<?php

namespace App\Http\Controllers;

use App\Categoriescontrat;
use App\Contrat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ContratController extends Controller
{
      /* Make sure you don't user Gate and Policy altogether for the same Model/Resource */
  public function gate()
  {
    $contrats = Contrat::find(1);
 
    if (Gate::allows('update-contrats', $contrats)) {
      echo 'Allowed';
    } else {
      echo 'Not Allowed';
    }
     
    exit;
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrats = Contrat::all();
        return view('contrats.index', compact('contrats'));
    }
    // function pour les contrats miniers
    public function contr()
    {
        $contrats = Contrat::where('categoriescontrat_id','1')->get();
        return view('contrats.contratsminiers', compact('contrats'));
    }

    // function pour les conventions miniers
    public function convent()
    {
        $contrats = contrat::where('categoriescontrat_id','2')->get();
        return view('contrats.conventionsminiers', compact('contrats'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Contrat::class);
        $categoriescontrats = Categoriescontrat::all();
        return view('contrats.create',compact('contrats', 'categoriescontrats'));
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
            'dure'=>'required',
            'commodite'=>'required',
            'fichier'=>'required'
        ]);
        $fichierPath = request('fichier')->store('uploads','public');
        $contrat = new Contrat([
            'nom' => $request->get('nom'),
            'dure' => $request->get('dure'),
            'commodite' => $request->get('commodite'),
            'fichier' => $fichierPath,
            'date_signe' => $request->get('date_signe'),
            'statut' => $request->get('statut'),
            'categoriescontrat_id' => $request->get('categoriescontrat_id')

        ]);
        $contrat->save();
        return redirect('/contrats')->with('Succes','contrat saved !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function show(Contrat $contrat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function edit(Contrat $contrat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contrat $contrat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contrat $contrat)
    {
        //
    }
}
