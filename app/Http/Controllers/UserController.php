<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserFavorite;

class UserController extends Controller
{
    //
    public function get_all_data(Request $request) {
        $user = User::selectAll()->get();
        $this->add_favorite_data($user);
        return $user;
    }

    private function add_favorite_data(&$user) {
        $n = count($user);
        for ($i=0; $i < $n; $i++) {
            $user[$i]['favorite'] = UserFavorite::ByUserId($user[$i]['user_id'])->get();
        }
    }

    public function get_data_with_movie(Request $request) {
        $user = User::selectAll()->byId($request->get('user_id'))->first();
        $user['favorite'] = UserFavorite::ByUserId($user['user_id'])->get();
        for ($i=0; $i < count($user['favorite']); $i++) {
            $movie = new MovieController();
            $movie_request = new Request();
            $movie_request->merge(['category_id' => $user['favorite'][$i]['genre_id']]);
            $user['favorite'][$i]['movie'] = $movie->get_data_by_genre($movie_request);
        }
        return $user;
    }
}
