<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeriguru extends Model
{
    protected $table = 'galeri_guru';
    protected $primarykey = 'id';
    protected $guarded = [
        'id',
    ];
}
