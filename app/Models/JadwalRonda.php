<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalRonda extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'hari',
        'rt',
        'petugas',
    ];
}
