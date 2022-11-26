<?php

namespace App\Imports;

use App\Models\Galeri;
use Maatwebsite\Excel\Concerns\ToModel;

class AdminImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Galeri([
            'foto'=>$row[1],
            'jud'=>$row[2],
            'ket'=>$row[3],
        ]);
    }
}
