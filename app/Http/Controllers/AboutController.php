<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        return response()->json($about);
    }

    public function update(Request $request, $id=1)
    {
        $about = About::find($id);
        $about->update($request->all());
        return response()->json('Data Updated');
    }
}
