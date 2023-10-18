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

    public function scopeByMovieId($query, $movie_id) {
        return $query
            ->select('t.tag_id','t.tag_name')
            ->leftJoin('tag as t', 'tag_list.tag_id', '=', 't.tag_id')
            ->when($movie_id, function($q, $movie_id) {
                $q->where('tag_list.movie_id', $movie_id);
            });
    }
}
