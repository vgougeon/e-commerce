<?php

use Illuminate\Database\Seeder;
use App\Game;
use App\Category;
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
        $game1->release_date = "2018-12-07";
        $game1->banner = "//images.igdb.com/igdb/image/upload/t_screenshot_big/sc5rla.jpg";
        $game1->cover = "//images.igdb.com/igdb/image/upload/t_cover_big/co2255.jpg";
        $game1->note = 4;


        $game1->save();
        
        $category = Category::find([2]);
        $game1->categories()->attach($category);

        // $ingredient = Ingredient::find([2]);
        // $recipe->ingredients()->attach($ingredient);
    }
}
