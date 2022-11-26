<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matapel extends Model
{
    protected $table = 'Matapel';
    protected $fillable = [
        'id',
        'gambar',
        'judul',
        'keterangan',
    ];
}
