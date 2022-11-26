<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makeg extends Model
{
    protected $table = 'Makeg';
    protected $primarykey = 'id';
    protected $guarded = [
        'id',
    ];
}
