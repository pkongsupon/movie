<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieMeta extends Model
{
    use HasFactory;
    protected $table = 'movie_metadata';
    protected $fillable = [
        'movie_id',
        'meta_picture_url',
        'meta_title',
        'meta_description',
    ];
}
