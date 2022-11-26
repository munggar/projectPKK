<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'peminjaman';
    protected $primaryKey = 'id';
    protected $fillable = ['id','siswa_id','nmbuku','keterangan'];

    public function siswa(){
        return $this->belongsTo('App\Models\Siswa');
    }
}
