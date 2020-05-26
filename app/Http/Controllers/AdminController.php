<?php

namespace App\Http\Controllers;

use App\Game;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function panel() {
        $users = User::paginate(10, ['*'], 'user_page');
        $games = Game::paginate(10, ['*'], 'game_page');
        return view('admin.panel', ['users' => $users, 'games' => $games]);
    }
}
