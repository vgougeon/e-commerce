<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Game;
class Category extends Model
{
    public function games()
    {
        return $this->belongsToMany(Game::class);
    }
}
