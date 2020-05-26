<?php

namespace App\Http\Controllers;

use App\Game;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function panel() {
        $users = User::all();
        $games = Game::all();
        return view('admin.panel', ['users' => $users, 'games' => $games]);
    }
}
