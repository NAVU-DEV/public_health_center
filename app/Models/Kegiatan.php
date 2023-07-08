<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    public $table = 'kegiatan';

    use HasFactory;

    protected $fillable = [
        'thumbnail',
        'title',
        'description'
    ];
}
