<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Services::all();
        return response()->json($services);
    }

    public function update(Request $request, $id=1)
    {
        $services = Services::find($id);
        $services->update($request->all());
        return response()->json('Data Updated');
    }
}
