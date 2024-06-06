<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapelModel extends Model
{
    protected $table = 'mapel';
    protected $fillable = [
        'mata_pelajaran',
    ];
    use HasFactory;
}
