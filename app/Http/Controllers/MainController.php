<?php

namespace App\Http\Controllers;
use App\Game;
use Illuminate\Http\Request;

class MainController extends Controller
{
    
    public function home() {
        setlocale(LC_TIME, 'French');

        $data = [
            "trending" => Game::orderBy('created_at', 'DESC')->first(),
            "games" => Game::orderBy('release_date', 'DESC')->paginate(30, ['*'], 'game_page')
        ];
        return view('home', $data);
    }
}
