<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::all();
        return response()->json($home);
    }

    public function update(Request $request, $id=1)
    {
        $home = Home::find($id);
        $home->update($request->all());
        return response()->json('Data Updated');
    }
}
