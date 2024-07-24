<?php

use App\Models\JobListing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = JobListing::with('employer', 'tags')->latest()->paginate(8);

    return view('jobs.index', [
        'jobs' => $jobs]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    return view('jobs.show', ['job' => JobListing::find($id)]);
});

Route::post('/jobs', function () {
    JobListing::create([
        'title' => request('title'),
        'description' => request('description'),
        'employer_id' => 1,
        'salary' => request('salary'),
    ]);

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
