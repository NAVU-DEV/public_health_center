<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    public $table = 'berita';
    
    use HasFactory;

    protected $fillable = [
		'thumbnail',
		'title',
		'content'
	];
}
