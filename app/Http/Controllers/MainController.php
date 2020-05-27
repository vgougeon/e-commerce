<?php

namespace App\Http\Controllers;
use Auth;
use App\Game;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function home() {
        $data = [
            "trending" => Game::orderBy('created_at', 'DESC')->first(),
            "games" => Game::orderBy('release_date', 'DESC')->paginate(10, ['*'], 'game_page')
        ];
        return view('main.home', $data);
    }

    public function profile($id) {
        $data = [
            "trending" => Game::inRandomOrder()->first(),
            "user" => User::find($id)
        ];
        return view('main.profile', $data);
    }

    public function edit($id){
      $user = user::find($id);
      return view('main.editprofile',['user'=>$user]);
    }

    public function update(Request $request, $id)
    {
        if(Auth::user()->id == $id) {
            $inputs = $request->except('_token', '_method');
            $user = user::find($id);
            foreach ($inputs as $key => $value) {
                $user->$key = $value;
            }
            $user->save();

            return redirect(route('profile', ['id' => $user->id]))->with('success', 'Utilisateur mis a jour avec succès !');
        }
        else {
            return redirect(route('/'));
        }
    }
}
