<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $table = 'galeris';

    protected $fillable = [
        'title',
        'filter_id',
        'image'
    ];


    //relasi ke filter
    public function filter()
    {
        return $this->belongsTo(Filter::class);
    }
}
