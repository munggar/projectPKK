<?php

namespace App\Exports;
use App\Models\Mapel;

use Maatwebsite\Excel\Concerns\FromCollection;

class MapelExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mapel::all();
    }
}
