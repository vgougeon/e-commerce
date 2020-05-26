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
      return $this->hasMany(Comment::class, 'id_game');
    }
}
