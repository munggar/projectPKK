<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'Berita';
    protected $fillable = [
        'id',
        'subfoto',
        'subjudul',
        'subket',
    ];
}
