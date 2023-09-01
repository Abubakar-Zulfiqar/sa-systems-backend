<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $game = Game::all();
        return response()->json($game);
    }

    public function update(Request $request, $id=1)
    {
        $game = Game::find($id);
        $game->update($request->all());
        return response()->json('Data Updated');
    }
}
