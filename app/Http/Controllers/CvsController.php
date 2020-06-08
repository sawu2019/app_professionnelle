<?php

namespace App\Http\Controllers;

use App\Exports\OperatExport;
use App\Operat;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class CvsController extends Controller
{
    public function export(){
        return Excel::download(new OperatExport, 'operats.xlsx');
    }
}
