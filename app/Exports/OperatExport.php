<?php

namespace App\Exports;

use App\Operat;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OperatExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Operat::select(['denomination','sigle','adresse'])->get();
    }

    public function headings(): array
    {
        return[
            'denomination',
            'sigle',
            'adresse',
        ];
    }
}
