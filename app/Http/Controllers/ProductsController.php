<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return response()->json($products);
    }

    public function show(Request $request)
    {
        $validator = Validator::make(['page' => $request->page], [
            'page' => 'required|in:Products,Real Estate Management,HR Management,Point of Sale System,Inventory Management Software,Procurement Management System,Accounting Management',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['error' => 'Invalid page parameter'], 400);
        }

        $products = Products::where('page', $request->page)->get();

        if ($products->isEmpty()) {
            return response()->json(['error' => 'Data not found'], 404);
        }

        return response()->json($products);
    }

    public function update(Request $request)
    {
        $products = Products::find($request->id);
        $products->update($request->all());
        return response()->json('Data Updated');
    }
}
