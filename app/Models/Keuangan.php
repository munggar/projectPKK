<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $table = 'Keuangan';
    protected $primaryKey = 'id';
    protected $fillable = ['id','siswa_id','harga','keterangan'];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['siswa'] ?? false, function($query, $siswa) {
            return $query->whereHas('siswa', function($query) use ($siswa) {
                $query->where('nama', 'like', "%". $siswa. "%");
            });
        });
    }

    public function siswa(){
        return $this->belongsTo('App\Models\Siswa');
    }

}
