<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Index - List All Projects (with status filter)
    |--------------------------------------------------------------------------
    */
    public function index(Request $request)
    {
        $query = Project::query();

        if ($request->status) {
            $query->where('status', $request->status);
        }

        $projects = $query->latest()->paginate(10);

        return view('admin.projects.index', compact('projects'));
    }

    /*
    |--------------------------------------------------------------------------
    | Create - Show Form
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        return view('admin.projects.create');
    }

    /*
    |--------------------------------------------------------------------------
    | Store - Save New Project
    |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'content' => 'required',
            'status' => 'required|in:ongoing,completed,featured',
            'category' => 'required|in:featured,ongoing,past',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->all();

        // Generate Slug
        $data['slug'] = Str::slug($request->title);

        // Image Upload
        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')
                ->store('projects', 'public');
        }

        Project::create($data);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project created successfully.');
    }

    /*
    |--------------------------------------------------------------------------
    | Show - Single Project (Optional)
    |--------------------------------------------------------------------------
    */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /*
    |--------------------------------------------------------------------------
    | Edit - Show Edit Form
    |--------------------------------------------------------------------------
    */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /*
    |--------------------------------------------------------------------------
    | Update - Update Project
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'content' => 'required',
            'status' => 'required|in:ongoing,completed,featured',
            'category' => 'required|in:featured,ongoing,past',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->all();

        // Update Slug
        $data['slug'] = Str::slug($request->title);

        // Update Image if new one uploaded
        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')
                ->store('projects', 'public');
        }

        $project->update($data);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project updated successfully.');
    }

    /*
    |--------------------------------------------------------------------------
    | Destroy - Delete Project
    |--------------------------------------------------------------------------
    */
    public function destroy(Project $project)
    {
        if ($project->image_path && \Storage::disk('public')->exists($project->image_path)) {
            \Storage::disk('public')->delete($project->image_path);
        }

        $project->delete();

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project deleted successfully.');
    }
}