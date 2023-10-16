<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagList extends Model
{
    use HasFactory;
    protected $table = 'tag_list';
    protected $fillable = [
        'movie_id',
        'tag_id',
    ];
}
