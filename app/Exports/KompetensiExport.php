<?php

namespace App\Exports;
use App\Models\Kompetensi;

use Maatwebsite\Excel\Concerns\FromCollection;

class KompetensiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kompetensi::all();
    }
}
