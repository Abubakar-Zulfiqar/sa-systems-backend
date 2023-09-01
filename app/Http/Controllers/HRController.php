<?php

namespace App\Http\Controllers;

use App\Models\HR;
use Illuminate\Http\Request;

class HRController extends Controller
{
    public function index()
    {
        $hr = HR::all();
        return response()->json($hr);
    }

    public function update(Request $request, $id=1)
    {
        $hr = HR::find($id);
        $hr->update($request->all());
        return response()->json('Data Updated');
    }
}
