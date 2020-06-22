<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operat;
use Illuminate\Support\Facades\DB;

class AccueilController extends Controller
{
    public function wel(){
        $data = DB::table('operats','arretes')->get();
        $bee = Operat::where('filiere_id','1')->get();
        $cmp = Operat::where('filiere_id','2')->get();
        //$cpmn = DB::table('operats')->select(DB::raw('filiere_id as filiere_id')-> where('filiere_id','1')->get();
        $cpmn = Operat::where('filiere_id','3')->get();
        $cppc = Operat::where('filiere_id','4')->get();
        $detpre = Operat::where('filiere_id','5')->get();
        $ent = Operat::where('filiere_id','6')->get();
        $lb = Operat::where('filiere_id','7')->get();
        $mdt = Operat::where('filiere_id','8')->get();
        $tdm = Operat::where('filiere_id','9')->get();
        $tpc = Operat::where('filiere_id','10')->get();
        $st = Operat::where('filiere_id','11')->get();
        return view('home',compact('data','bee','cmp','cpmn','cppc','detpre','ent','lb','mdt','tdm','tpc','st'));
    }
}
