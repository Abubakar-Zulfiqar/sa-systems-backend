<?php

namespace App\Http\Controllers;

use App\Models\Development;
use Illuminate\Http\Request;

class DevelopmentController extends Controller
{
    public function index()
    {
        $development = Development::all();
        return response()->json($development);
    }

    public function update(Request $request, $id=1)
    {
        $development = Development::find($id);
        $development->update($request->all());
        return response()->json('Data Updated');
    }
}
