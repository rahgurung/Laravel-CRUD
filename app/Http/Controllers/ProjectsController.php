<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\Validator;


class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        Project::create([
            'title' => request('title'),
            'description' => request('description')
        ]);
        return redirect('/projects');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project) 
    {
        $project->update(request(['title', 'description']));
        return redirect('/projects');

    }

    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
        return redirect('/projects');
    }
}
