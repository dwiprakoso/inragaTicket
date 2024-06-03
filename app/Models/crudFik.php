<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crudFik extends Model
{
    use HasFactory;


    protected $table = 'tablefik';

    protected $fillable = [
        'nama_fik',
        'file_fik',
        'fik_kapten',
        'nofik_kapten',
        'fik_official',
        'nofik_official',
        'bukti_tffik',
    ];
}
