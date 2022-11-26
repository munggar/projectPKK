<?php

namespace App\Imports;

use App\Models\Berita;
use Maatwebsite\Excel\Concerns\ToModel;

class BeritaImport implements ToModel
{
    public function model(array $row)
    {
        return new Berita([
            'subfoto'=>$row[1],
            'subjudul'=>$row[2],
            'subket'=>$row[3],
        ]);
    }
}
