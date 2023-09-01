<?php

namespace App\Http\Controllers;

use App\Models\POS;
use Illuminate\Http\Request;

class POSController extends Controller
{
    public function index()
    {
        $pos = POS::all();
        return response()->json($pos);
    }

    public function update(Request $request, $id=1)
    {
        $pos = POS::find($id);
        $pos->update($request->all());
        return response()->json('Data Updated');
    }
}
