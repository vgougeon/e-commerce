<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function game()
    {
      return $this->belongsToOne(Game::class, 'game_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    
    
}
