<?php

use Illuminate\Database\Seeder;
use App\Game;
class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $game1 = new Game;
        $game1->name = "League Of Legends";
        $game1->price = 150.99;
        $game1->description = "jeu du démon";
        $game1->note = 4;

        $game2 = new Game;
        $game2->name = "Animal Crossing";
        $game2->price = 49.99;
        $game2->description = "jeu de détente";
        $game2->note = 5;

        $game3 = new Game;
        $game3->name = "Nintendogs";
        $game3->price = 1400.99;
        $game3->description = "jeu de chien";
        $game3->note = 3;

        $game1->save();
        $game2->save();
        $game3->save();
    }
}
