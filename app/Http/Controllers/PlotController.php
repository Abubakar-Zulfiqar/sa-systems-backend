<?php

namespace App\Http\Controllers;

use App\Models\Plot;
use Illuminate\Http\Request;

class PlotController extends Controller
{
    public function index()
    {
        $plot = Plot::all();
        return response()->json($plot);
    }

    public function update(Request $request, $id=1)
    {
        $plot = Plot::find($id);
        $plot->update($request->all());
        return response()->json('Data Updated');
    }
}
