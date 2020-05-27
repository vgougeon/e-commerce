<?php
use App\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment = new Comment;
        $comment->review = "Super jeu malgré quelques petits bugs";
        $comment->game_id = 1;
        $comment->user_id = 1;
        $comment->note = 4;

        $comment->save();
    }
}
