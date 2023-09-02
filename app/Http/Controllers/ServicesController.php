<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Services::all();
        return response()->json($services);
    }

    public function show(Request $request)
    {
        $validator = Validator::make(['page' => $request->page], [
            'page' => 'required|in:Services,Design UI/ UX,Web Development,Mobile Applications,Custom Web Applications,Game Development,AR/VR Applications',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['error' => 'Invalid page parameter'], 400);
        }

        $services = Services::where('page', $request->page)->get();

        if ($services->isEmpty()) {
            return response()->json(['error' => 'Data not found'], 404);
        }

        return response()->json($services);
    }

    public function update(Request $request)
    {
        $services = Services::find($request->id);
        $services->update($request->all());
        return response()->json('Data Updated');
    }
}
