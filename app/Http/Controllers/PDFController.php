<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Operat;

class PDFController extends Controller
{
    public function getPDF(){
        $operats=Operat::all();
        $pdf=PDF::loadView('pdf.operat', ['operats'=>$operats])->setPaper('a4', 'paysage');
        return $pdf->download('operat.pdf');
    }
}
