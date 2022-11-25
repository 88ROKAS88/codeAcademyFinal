<?php

namespace App\Http\Controllers\Games;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\catgame_highscore;
use App\Http\Resources\Games\CatGameResource;

class CatGameController extends Controller
{
    public function welcome()
    {
        return view('content.welcome');
    }

    public function play()
    {
        return view('catgame.play');
    }

    public function highscore($score = null)
    {
        $highscores = catgame_highscore::get();
        return view('catgame.highscore', compact('highscores', 'score'));
    }

    public function credits()
    {
        return view('catgame.credits');
    }

    public function newscore(Request $request)
    {

        // dd($highScore = catgame_highscore::where('user_id', $request->get('user_id'))->firstOrFail());
        if (catgame_highscore::where('user_id', $request->get('user_id'))->exists()) {
            $highScore = catgame_highscore::where('user_id', $request->get('user_id'))->firstOrFail();
        } else {
            // if user is not on high score - create new entry
            $highScore = new catgame_highscore();
        }

        $highScore->user_id = $request->get('user_id');
        $highScore->user_name = $request->get('user_name');
        $highScore->lvl1 = $request->get('lvl1');
        $highScore->lvl2 = $request->get('lvl2');
        $highScore->lvl3 = $request->get('lvl3');
        $highScore->overall = $request->get('overall');

        $highScore->save();

        return new CatGameResource($highScore);
    }
}
