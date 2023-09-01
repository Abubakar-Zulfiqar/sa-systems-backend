<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::all();
        return response()->json($project);
    }

    public function update(Request $request, $id=1)
    {
        $project = Project::find($id);
        $project->update($request->all());
        return response()->json('Data Updated');
    }
}
