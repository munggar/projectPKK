<?php

namespace App\Imports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Siswa([
            'nis'=>$row[1],
            'nama'=>$row[2],
            'jkel'=>$row[3],
            'ttg'=>$row[4],
            'bulan'=>$row[5],
            'tahun'=>$row[6],
        ]);
    }
}
