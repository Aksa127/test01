<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokumentasi extends Model
{
    /** @use HasFactory<\Database\Factories\DokumentasiFactory> */
    use HasFactory;

    protected $fillable = [
        'nama',
        'tanggal',
        'keterangan',
    ];
}
