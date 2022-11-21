<?php

namespace App\Http\Controllers\Games;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\catgame_highscore;

class CatGameController extends Controller
{
    public function welcome()
    {
        return view('content.welcome');
    }

    public function play()
    {
        // return view('catgame.play');
        return view('catgame.play');
    }

    public function highscore()
    {
        $highscores = catgame_highscore::get();
        // return view('products.create', compact('highscores'));
        return view('catgame.highscore', compact('highscores'));
    }

    public function credits()
    {
        return view('catgame.credits');
    }
}
