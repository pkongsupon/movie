<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TagList;
use App\Models\Movie;

class MovieController extends Controller
{
    //
    public function get_all_data(Request $request) {
        $movie = Movie::withMeta()->get();
        $this->add_tag_data($movie);
        return $movie;
    }

    public function get_data_by_genre(Request $request) {
        $movie = Movie::withMeta()->withGenre($request->get('category_id'))->get();
        $this->add_tag_data($movie);
        return $movie;
    }

    public function get_data_by_tag(Request $request) {
        $movie = Movie::withMeta()->withTag($request->get('tag_id'))->get();
        $this->add_tag_data($movie);
        return $movie;
    }

    private function add_tag_data(&$movie) {
        $n = count($movie);
        for ($i=0; $i < $n; $i++) {
            $movie[$i]['tag_list'] = TagList::ByMovieId($movie[$i]['movie_id'])->get();
        }
    }
}
