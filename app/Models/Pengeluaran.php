<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = 'Pengeluarans';
    protected $primaryKey = 'id';
    protected $fillable = ['pengeluaran','keterangan'];
}
