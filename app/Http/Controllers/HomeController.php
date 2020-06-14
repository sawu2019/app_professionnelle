<?php

namespace App\Http\Controllers;

use App\Operat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('operats','arretes')->get();
        $dat = DB::table('arretes')->get();
        $bee = Operat::where('filiere_id','1')->get();
        //$cpmn = DB::table('operats')->select(DB::raw('filiere_id as filiere_id')-> where('filiere_id','1')->get();
        $cpmn = Operat::where('filiere_id','2')->get();
        $cppc = Operat::where('filiere_id','3')->get();
        return view('home',compact('data','dat','bee','cpmn','cppc'));
    }
}
