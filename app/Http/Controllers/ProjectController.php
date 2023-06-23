<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return Inertia::render('Projects/Index', [
            'projects' => $projects,
        ]);
    }

    public function show(Project $project)
    {
    }

    public function edit(Project $project)
    {
        return Inertia::render('Projects/Form', [
            'project' => $project,
        ]);
    }

    public function create()
    {
        return Inertia::render('Projects/Form', [
            'project' => [],
        ]);  
    }

    public function store(Request $request)
    {
        $attributes = $request->all();
        Log::info($attributes);
        $attributes['team_id'] = auth()->user()->ownedTeams()->first()->id;
        $project = Project::create($attributes);
        return redirect()->route('projects.index');
    }

    public function update(Project $project, Request $request)
    {
        $project->update($request->all());
        return redirect()->route('projects.index');
    }

    public function destroy(Project $project)
    {   
        $project->delete();
        return redirect()->route('projects.index');
    }
}
