<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $table = 'Keuangan';
    protected $primaryKey = 'id';
    protected $fillable = ['id','siswa_id','harga','keterangan'];

    public function siswa(){
        return $this->belongsTo('App\Models\Siswa');
    }
    
}
