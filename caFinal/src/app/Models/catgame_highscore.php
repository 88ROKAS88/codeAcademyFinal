<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catgame_highscore extends Model
{
    use HasFactory;

    protected $table = 'catgame_highscore';
    public $timestamps = false;
}
