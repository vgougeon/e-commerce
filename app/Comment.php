<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function game()
    {
      return $this->belongsToOne(Game::class, 'id_game');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
    
    
}
