<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index()
    {
        $design = Design::all();
        return response()->json($design);
    }

    public function update(Request $request, $id=1)
    {
        $design = Design::find($id);
        $design->update($request->all());
        return response()->json('Data Updated');
    }
}
