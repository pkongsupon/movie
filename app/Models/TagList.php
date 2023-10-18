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

    public function scopeByMovieId($query, $movie_id = 0) {
        return $query
            ->select('t.tag_id','t.tag_name')
            ->leftJoin('tag as t', 'tag_list.tag_id', '=', 't.tag_id')
            ->where('tag_list.movie_id', $movie_id);
    }
}
