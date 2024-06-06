<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
    protected $table = 'guru';
    protected $fillable = [
        'nama',
        'nomer_hp',
        'foto',
        'jabatan',
        'mapel_id',
        'kelas_id',
    ];
    use HasFactory;
}
