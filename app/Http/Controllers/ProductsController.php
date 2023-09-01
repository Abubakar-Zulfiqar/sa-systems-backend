<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return response()->json($products);
    }

    public function update(Request $request, $id=1)
    {
        $products = Products::find($id);
        $products->update($request->all());
        return response()->json('Data Updated');
    }
}
