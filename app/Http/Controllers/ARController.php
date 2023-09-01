<?php

namespace App\Http\Controllers;

use App\Models\AR;
use Illuminate\Http\Request;

class ARController extends Controller
{
    public function index()
    {
        $ar = AR::all();
        return response()->json($ar);
    }

    public function update(Request $request, $id=1)
    {
        $ar = AR::find($id);
        $ar->update($request->all());
        return response()->json('Data Updated');
    }
}
