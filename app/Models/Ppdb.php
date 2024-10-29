<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;

    protected $table = 'ppdbs';

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'place',
        'sk_1',
        'sk_2',
        'sk_3',
        'sk_4',
        'image'
    ];
}
