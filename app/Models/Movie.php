<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movie';
    protected $fillable = [
        'title',
        'description',
        'genre_id',
        'length',
        'released_date',
        'available_date',
    ];

    public function scopeWithMeta($query) {
        return $query
            ->select(
                'movie.movie_id',
                'movie.title',
                'movie.description',
                'g.genre_name',
                'movie.length',
                'movie.released_date',
                'movie.available_date',
                'mm.meta_picture_url_json',
                'mm.meta_title',
                'mm.meta_description',
            )
            ->leftJoin('movie_metadata as mm', 'movie.movie_id', '=', 'mm.movie_id')
            ->leftJoin('genre as g', 'movie.genre_id', '=', 'g.genre_id');
    }

    public function scopewithGenre($query, $genre_id) {
        return $query
            ->when($genre_id, function($q, $genre_id) {
                $q->where('movie.genre_id', $genre_id);
            });
    }

    public function scopewithTag($query, $tag_id) {
        return $query
            ->when($tag_id, function($q, $tag_id) {
                $q->leftJoin('tag_list as tl', 'movie.movie_id', '=', 'tl.movie_id')
                  ->where('tl.tag_id', $tag_id)
                  ->groupBy('movie.movie_id');
            });
    }
}
