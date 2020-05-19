<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category;
        $category->name = 'FPS';
        $category->description = 'Jeux de shoot';
        $category->save();

        $category1 = new Category;
        $category1->name = 'MOBA';
        $category1->description = 'Jeux de stratégie tro cool';
        $category1->save();

        $category2 = new Category;
        $category2->name = 'MMORPG';
        $category2->description = 'Jeux massivement multijoueur';
        $category2->save();

    }
}
