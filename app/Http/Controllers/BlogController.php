<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
        ]);

        $blog = Blog::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'content' => $validatedData['content'],
        ]);

        return response()->json($blog, 201);
    }

    public function index()
    {
        $blogs = Blog::all();
        return response()->json($blogs, 200);
    }

    public function show($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return response()->json(['message' => 'Blog not found'], 404);
        }

        return response()->json($blog, 200);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
        ]);

        $blog = Blog::find($id);

        if (!$blog) {
            return response()->json(['message' => 'Blog not found'], 404);
        }

        $blog->update([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'content' => $validatedData['content'],
        ]);

        return response()->json($blog, 200);
    }
}
