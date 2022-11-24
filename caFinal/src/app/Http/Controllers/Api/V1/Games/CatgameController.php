<?php

namespace App\Http\Controllers\Api\V1\Games;

use App\Http\Controllers\Controller;
use App\Http\Resources\Games\CatGameResource;
use Illuminate\Http\Request;

use App\Models\catgame_highscore;

class CatgameController extends Controller
{
    public function newscore(Request $request)
    {
        $highScore = new catgame_highscore();

        $highScore->user_id = $request->get('user_id');
        $highScore->user_name = $request->get('user_name');
        $highScore->lvl1 = $request->get('lvl1');
        $highScore->lvl2 = $request->get('lvl2');
        $highScore->lvl3 = $request->get('lvl3');
        $highScore->overall = $request->get('overall');

        $highScore->save();

        // dd('Back from server baby ! ', $request);
        return new CatGameResource($highScore);
    }
}
