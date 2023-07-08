<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuTamu extends Model
{
    public $table = 'buku_tamu';

    use HasFactory;

    protected $fillable = [
        'gb_date',
        'name',
        'age',
        'description'
    ];
}
