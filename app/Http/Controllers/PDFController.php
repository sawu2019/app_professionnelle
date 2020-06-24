<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Operat;
use App\Zea;

class PDFController extends Controller
{
// function pour genere le pdf des operateurs
    public function getPDF(){
        $operats=Operat::all();
        $pdf=PDF::loadView('pdf.operat', ['operats'=>$operats])->setPaper('a4', 'paysage');
        return $pdf->download('operat.pdf');
    }
// function pour genere le pdf de zeas
    public function zeaPDF(){
        $zeas=Zea::all();
        $pdf=PDF::loadView('pdf.zea', ['zeas'=>$zeas])->setPaper('a4', 'paysage');
        return $pdf->download('zea.pdf');
    }
}
