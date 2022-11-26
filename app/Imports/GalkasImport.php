<?php

namespace App\Imports;

use App\Models\Galfot;
use Maatwebsite\Excel\Concerns\ToModel;

class GalkasImport implements ToModel
{
    public function model(array $row)
    {
        return new Galfot([
            'foto'=>$row[1],
            'jud'=>$row[2],
            'ket'=>$row[3],
        ]);
    }
}
