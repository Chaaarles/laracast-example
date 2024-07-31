<?php

namespace App\Http\Controllers;

use App\Models\JobListing;

class JobController extends Controller
{
    public function index()
    {
        $jobs = JobListing::with('employer', 'tags')->latest()->paginate(8);

        return view('jobs.index', [
            'jobs' => $jobs]);
    }

    public function show(JobListing $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function edit(JobListing $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function store()
    {
        request()->validate(
            [
                'title' => ['required', 'min:3'],
                'description' => 'required',
                'salary' => 'required',
            ]
        );

        JobListing::create([
            'title' => request('title'),
            'description' => request('description'),
            'employer_id' => 1,
            'salary' => request('salary'),
        ]);

        return redirect('/jobs');
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function update(JobListing $job)
    {
        request()->validate(
            [
                'title' => ['required', 'min:3'],
                'description' => 'required',
                'salary' => 'required',
            ]
        );

        $job->update([
            'title' => request('title'),
            'description' => request('description'),
            'employer_id' => 1,
            'salary' => request('salary'),
        ]);

        return redirect('/jobs/'.$job->id);
    }

    public function destroy(JobListing $job)
    {
        $job->delete();

        return redirect('/jobs');
    }
}
