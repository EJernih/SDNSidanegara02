<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sarpra extends Model
{
    use HasFactory;

    protected $table = 'sar_pras';
    protected $fillable = [
        'judul',
        'jumlah',
        'deskripsi',
        'image'
    ];
}
