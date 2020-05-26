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
        $game1->name = "Super Smash Bros Ultimate";
        $game1->price = 59.99;
        $game1->description = "Jeu de combat surpuissant";
        $game1->note = 4;

        $game2 = new Game;
        $game2->name = "Animal Crossing: New Horizon";
        $game2->price = 59.99;
        $game2->description = "Détente à gogo";
        $game2->note = 5;

        $game3 = new Game;
        $game3->name = "Nintendogs";
        $game3->price = 19.99;
        $game3->description = "Jeu de chien";
        $game3->note = 3;

        $game1->save();
        $game2->save();
        $game3->save();
    }
}
