<?php

namespace App\Http\Controllers;

use App\Models\Procurement;
use Illuminate\Http\Request;

class ProcurementController extends Controller
{
    public function index()
    {
        $procurement = Procurement::all();
        return response()->json($procurement);
    }

    public function update(Request $request, $id=1)
    {
        $procurement = Procurement::find($id);
        $procurement->update($request->all());
        return response()->json('Data Updated');
    }
}
