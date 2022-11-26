<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;

class Galfot extends Model
{
    protected $table = 'Galfot';
    protected $fillable = [
        'id',
        'siswa_id',
        'foto',
        'ket',
    ];

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }
}


