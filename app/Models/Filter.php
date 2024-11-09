<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    use HasFactory;

    protected $fillable = [
        'filter'
    ];


    //relasi ke tabel galeri
    public function galeris()
    {
        return $this->hasMany(Galeri::class);
    }
}
