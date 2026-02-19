<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Downloadable extends Model
{
    /** @use HasFactory<\Database\Factories\DownloadableFactory> */
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'text',
        'url',
        'is_published',
        'category',

    ];
}
