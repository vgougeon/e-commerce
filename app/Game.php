<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function categories()
    {
      return $this->belongsToMany(Category::class, 'category_game');
    }

    public function comments()
    {
      return $this->hasMany(Comment::class, 'game_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'game_user')->withTimestamps();
    }
}
