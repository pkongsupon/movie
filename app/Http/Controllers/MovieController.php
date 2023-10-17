<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    //
    public function get_all_data(Request $request) {
        return Movie::withMeta()->get();
    }

    public function get_data_by_genre(Request $request) {
        return Movie::withMeta()->withGenre($request->get('category_id'))->get();
    }

    public function get_data_by_tag(Request $request) {
        $movie = Movie::withMeta()->withTag($request->get('tag_id'))->get();
        // return
    }
}
