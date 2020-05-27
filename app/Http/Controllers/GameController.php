<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::paginate(10, ['*'], 'game_page');
        return view('admin.games', ['games' => $games]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create.game');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->except('_token', '_method', 'getter');
        $game = new Game;
        foreach ($inputs as $key => $value) {
            $game->$key = $value;
        }
        $game->save();

        return redirect(route('games.index'))->with('success', 'Jeu créé avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //   $game = Game::find($id);
      $game = Game::where('id', $id)->with(['comments', 'comments.user'])->first();
      return view('main.showgame' , ['game' => $game]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('admin.edit.game', ["game" => $game]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $inputs = $request->except('_token', '_method', 'getter');
        foreach ($inputs as $key => $value) {
            $game->$key = $value;
        }
        $game->save();

        return redirect(route('games.index'))->with('success', 'Jeu modifié avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = game::find($id);
        $game->delete();

         return redirect(route('games.index'))->with('succes', 'Jeu supprimé avec succès !');
    }
}
