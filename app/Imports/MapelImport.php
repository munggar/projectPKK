<?php

namespace App\Imports;

use App\Models\Mapel;
use Maatwebsite\Excel\Concerns\ToModel;

class MapelImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mapel([
            'gambar'=>$row[1],
            'judul'=>$row[2],
            'keterangan'=>$row[3],
        ]);
    }
}
