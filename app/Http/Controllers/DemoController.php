<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DemoController extends Controller
{
    public function index()
    {
        $demo = Demo::all();
        return response()->json($demo);
    }

    public function show(Request $request)
    {
        $validator = Validator::make(['page' => $request->page], [
            'page' => 'required|in:Demo,HRDemo,InventoryDemo,ProcurementDemo,AccountingDemo',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['error' => 'Invalid page parameter'], 400);
        }

        $demo = Demo::where('page', $request->page)->get();

        if ($demo->isEmpty()) {
            return response()->json(['error' => 'Data not found'], 404);
        }

        return response()->json($demo);
    }

    public function update(Request $request)
    {
        $demo = Demo::find($request->id);
        $demo->update($request->all());
        return response()->json('Data Updated');
    }
}
