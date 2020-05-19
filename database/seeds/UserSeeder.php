<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = new User;
      $user->name = "gouge";
      $user->lastname = "l'idiot";
      $user->password = '$2y$10$AxFjHe7tw7FJ9x18fvPCJOc8aX4AAsoqQlo2ZUlZyLLbTGUE6QQ7S';
      $user->birth_date = '2000-10-10';
      $user->email = 'admin@admin';
      $user->is_admin = True;
      $user->save();
    }
}
