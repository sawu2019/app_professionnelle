<?php

namespace App\Http\Controllers;

use App\Titrem;
use App\Province;
use App\Operat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TitremController extends Controller
{
       /* Make sure you don't user Gate and Policy altogether for the same Model/Resource */
  public function gate()
  {
    $titrems = Titrem::find(1);
 
    if (Gate::allows('update-titrems', $titrems)) {
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
        $titrems = Titrem::with('province')->get();
        return view('titrems.index', compact('titrems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Titrem::class);
        $provinces = Province::all();
        $operats = Operat::all();
        return view('titrems.create',compact('titrems','provinces', 'operats'));
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
            'permis'=>'required',
            'titusite'=>'required',
            'typepermis'=>'required',
            'statut'=>'required',
            'carrem'=>'required',
            'localisation'=>'required',
            'dateoctroi'=>'required',
            'dateexp'=>'required'
        ]);
        $titrem = new Titrem([
            'permis' => $request->get('permis'),
            'titusite' => $request->get('titusite'),
            'typepermis' => $request->get('typepermis'),
            'statut' => $request->get('statut'),
            'carrem' => $request->get('carrem'),
            'localisation' => $request->get('localisation'),
            'dateoctroi' => $request->get('dateoctroi'),
            'dateexp' => $request->get('dateexp'),
            'province_id' => $request->get('province_id'),
            'operat_id' => $request->get('operat_id')

        ]);
        $titrem->save();
        return redirect('/titrems')->with('Succes','Titre miniers saved !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Titrem  $titrem
     * @return \Illuminate\Http\Response
     */
    public function show(Titrem $titrem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Titrem  $titrem
     * @return \Illuminate\Http\Response
     */
    public function edit(Titrem $titrem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Titrem  $titrem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titrem $titrem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Titrem  $titrem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titrem $titrem)
    {
        //
    }
}
