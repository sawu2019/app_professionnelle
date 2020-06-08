<?php

namespace App\Http\Controllers;

use App\Arrete;
use App\Operat;
use App\Typearrete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ArreteController extends Controller
{
      /* Make sure you don't user Gate and Policy altogether for the same Model/Resource */
  public function gate()
  {
    $arretes = Arrete::find(1);
 
    if (Gate::allows('update-operats', $arretes)) {
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
        $arretes = Arrete::with('typearrete')->get();
        return view('arretes.index', compact('arretes'));
    }

        // function pour l'arrete interministeriels
        public function interminister()
        {
            $arretes = Arrete::where('typearrete_id','1')->get();
            return view('arretes.interministeriels', compact('arretes'));
        }
    
        // function pour l'arrete ministeriels
        public function minister()
        {
            $arretes = Arrete::where('typearrete_id','2')->get();
            return view('arretes.ministeriels', compact('arretes'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Arrete::class);
        $typearretes = Typearrete::all();
        $operats = Operat::all();
        return view('arretes.create', compact('arretes', 'typearretes', 'operats'));
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
            'titre'=>'required',
            'annees'=>'required'
        ]);
        $fichierPath = request('fichier')->store('uploads','public');
        $arrete = new Arrete([
            'titre' => $request->get('titre'),
            'typearrete_id' => $request->get('typearrete_id'),
            'operat_id' => $request->get('operat_id'),
            'annees' => $request->get('annees'),
            'fichier' => $fichierPath

        ]);
        $arrete->save();
        return redirect('/arretes')->with('Succes','Post saved !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\arrete  $arrete
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('create',Arrete::class);
        $arrete = Arrete::find($id);
        return view('arretes.show', compact('arrete'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\arrete  $arrete
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('create',Arrete::class);
        $arrete = Arrete::find($id);
        return view('arretes.edit', compact('arrete'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\arrete  $arrete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titre'=>'required',
            'annees'=>'required'
        ]);
        $arrete = Arrete::find($id);
        $arrete->titre =  $request->get('titre');
        $arrete->annees = $request->get('annees');
        $arrete->fichier = $request->get('fichier');
        $arrete->save();

        return redirect('/arretes')->with('Reussi', 'Modification Effectuer!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\arrete  $arrete
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', $id);
        $arrete = Arrete::find($id);
        $arrete->delete();

        return redirect('/arretes')->with('Reussi', 'Suppression Effectuer!');
    }
}
