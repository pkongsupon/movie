<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFavorite extends Model
{
    use HasFactory;
    protected $table = 'user_favorite';
    protected $fillable = [
        'user_id',
        'genre_id',
    ];
}
