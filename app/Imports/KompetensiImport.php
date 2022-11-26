<?php

namespace App\Imports;

use App\Models\Kompetensi;
use Maatwebsite\Excel\Concerns\ToModel;

class KompetensiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kompetensi([
            'gambar'=>$row[1],
            'judul'=>$row[2],
            'keterangan'=>$row[3],
        ]);
    }
}
