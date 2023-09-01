<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $inventory = Inventory::all();
        return response()->json($inventory);
    }

    public function update(Request $request, $id=1)
    {
        $inventory = Inventory::find($id);
        $inventory->update($request->all());
        return response()->json('Data Updated');
    }
}
