<?php

namespace App\Http\Controllers;
use App\Game;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function home() {
        setlocale(LC_TIME, 'French');

        $data = [
            "trending" => Game::orderBy('created_at', 'DESC')->first(),
            "games" => Game::orderBy('release_date', 'DESC')->paginate(30, ['*'], 'game_page')
        ];
        return view('main.home', $data);
    }


    public function edit($id){
      $user = user::find($id);
      return view('main.editprofile',['user'=>$user]);
    }

    public function update(Request $request, $id)
    {
      $inputs = $request->except('_token', '_method');
      $user = user::find($id);
      foreach ($inputs as $key => $value) {
        $user->$key = $value;
      }
      $user->save();

      return redirect(route('main.home'))->with('success', 'Utilisateur mis a jour avec succès !');
    }
}
