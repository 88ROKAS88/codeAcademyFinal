<?php

namespace App\Http\Controllers\Api\V1\Games;

use App\Http\Controllers\Controller;
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
        // $product->category_id = $request->get('category_id');
        // $product->name        = $request->get('name');
        // $product->price         = $request->get('price');
        // $product->count        = $request->get('count');
        // $product->description = json_encode($request->get('description'));
        // $product->styles        = $request->get('styles');

        $highScore->save();

        dd('Back from server baby ! ', $request);
        // return new ProductResource($product);
    }
}
