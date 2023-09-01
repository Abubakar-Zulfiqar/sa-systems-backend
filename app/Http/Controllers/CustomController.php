<?php

namespace App\Http\Controllers;

use App\Models\Custom;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function index()
    {
        $custom = Custom::all();
        return response()->json($custom);
    }

    public function update(Request $request, $id=1)
    {
        $custom = Custom::find($id);
        $custom->update($request->all());
        return response()->json('Data Updated');
    }
}
