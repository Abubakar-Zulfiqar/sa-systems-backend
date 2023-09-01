<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function index()
    {
        $mobile = Mobile::all();
        return response()->json($mobile);
    }

    public function update(Request $request, $id=1)
    {
        $mobile = Mobile::find($id);
        $mobile->update($request->all());
        return response()->json('Data Updated');
    }
}
