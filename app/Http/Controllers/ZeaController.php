<?php

namespace App\Http\Controllers;

use App\Zea;
use App\Province;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class ZeaController extends Controller
{
     /* Make sure you don't user Gate and Policy altogether for the same Model/Resource */
  public function gate()
  {
    $zeas = Zea::find(1);
 
    if (Gate::allows('update-operats', $zeas)) {
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
        $zeas = Zea::with('province')->get();
        return view('zeas.index', compact('zeas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Zea::class);
        $provinces = Province::all();
        return view('zeas.create',compact('zeas', 'provinces'));
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
            'filie'=>'required',
            'narrete'=>'required',
            'qualification'=>'required',
            'transformation'=>'required',
            'annee'=>'required'
        ]);
        $zea = new Zea([
            'filie' => $request->get('filie'),
            'narrete' => $request->get('narrete'),
            'qualification' => $request->get('qualification'),
            'transformation' => $request->get('transformation'),
            'annee' => $request->get('annee'),
            'province_id' => $request->get('province_id')

        ]);
        $zea->save();
        return redirect('/zeas')->with('Succes','zea saved !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Zea  $zea
     * @return \Illuminate\Http\Response
     */
    public function show(Zea $zea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Zea  $zea
     * @return \Illuminate\Http\Response
     */
    public function edit(Zea $zea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Zea  $zea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zea $zea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Zea  $zea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zea $zea)
    {
        //
    }
}
