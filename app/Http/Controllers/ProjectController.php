<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdateRequest;
use App\Models\Client;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::latest()->paginate(7);
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        $users = User::all()->pluck('full_name', 'id');
        $clients = Client::all()->pluck('contact_name', 'id');

        return view('projects.create', compact('users', 'clients'));
    }


    public function store(ProjectStoreRequest $request)
    {
        Project::create($request->validated());
        return to_route('projects.index');
    }

    public function show(Project $project)
    {
        //
    }

    public function edit(Project $project)
    {
        $users = User::all()->pluck('full_name', 'id');
        $clients = Client::all()->pluck('contact_name', 'id');

        return view('projects.edit', compact('project', 'users', 'clients'));
    }


    public function update(ProjectUpdateRequest $request, Project $project)
    {
        $project->update($request->validated());
        return to_route('projects.index');
    }


    public function destroy(Project $project)
    {
        $project->delete();
        return back();
    }
}
