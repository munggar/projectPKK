<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompetensi extends Model
{
    protected $table = 'Kompetensi';
    protected $fillable = [
        'id',
        'gambar',
        'judul',
        'keterangan',
    ];
}
