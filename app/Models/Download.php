<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    const FILE_PATH = 'assets/file/';

    public $table = 'download';

    use HasFactory;

    protected $fillable = [
        'title',
        'file'
    ];
}
