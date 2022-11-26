<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'Siswa';
    protected $fillable = ['id','nis','nama','jkel','ttg','bulan','tahun'];
    public $timestamps=false;

    public function Keuangan(){
        return $this->hasMany('App\Models\Keuangan');
    }
    public function Buku(){
        return $this->hasMany('App\Models\Buku');
    }
    public function Galfot(){
        return $this->hasMany('App\Models\Galfot');
    }
}
