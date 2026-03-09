<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Announcements extends Model
{
    /** @use HasFactory<\Database\Factories\AnnouncementsFactory> */
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'title',
        'image_url',
        'description',
        'content',
        'is_published',
    ];

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}
