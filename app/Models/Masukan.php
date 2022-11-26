<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masukan extends Model
{
    protected $table = 'Masukan';
    protected $fillable = ['id','nis','nama', 'email','masukan'];
    public $timestamps = false;
}
