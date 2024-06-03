<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crudSMA extends Model
{
    use HasFactory;

    protected $table = 'tablesma';

    protected $fillable = [
        'file_tim',
        'nama_sekolah',
        'nama_kapten',
        'no_kapten',
        'nama_official',
        'no_official',
        'nama_capo',
        'no_capo',
        'logo_sekolah',
        'file_tim',
        'bukti_tf',
    ];
}
