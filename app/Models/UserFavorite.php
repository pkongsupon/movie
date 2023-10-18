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
        'website_theme',
    ];

    public function scopeByUserId($query, $user_id) {
        return $query
            ->select(
                'g.genre_id',
                'g.genre_name',
                'user_favorite.website_theme',
            )
            ->leftJoin('genre as g', 'user_favorite.genre_id', '=', 'g.genre_id')
            ->when($user_id, function($q, $user_id) {
                $q->where('user_favorite.user_id', $user_id);
            });
    }
}
