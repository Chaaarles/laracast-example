<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        "jobs" => [
            ["id" => 1, "title" => "PHP Developer", "description" => "This is an awesome job", "salary" => "$60k"],
            ["id" => 2, "title" => "Python Developer", "description" => "This is an awesome job", "salary" => "$60k"],
            ["id" => 3, "title" => "Ruby Developer", "description" => "This is an awesome job", "salary" => "$60k"],
            ["id" => 4, "title" => "Java Developer", "description" => "This is an awesome job", "salary" => "$60k"],
            ["id" => 5, "title" => "C# Developer", "description" => "This is an awesome job", "salary" => "$60k"]
        ]]);
});

Route::get("/jobs/{id}", function ($id) {
    $jobs = [
        ["id" => 1, "title" => "PHP Developer", "description" => "This is an awesome job", "salary" => "$60k"],
        ["id" => 2, "title" => "Python Developer", "description" => "This is an awesome job", "salary" => "$60k"],
        ["id" => 3, "title" => "Ruby Developer", "description" => "This is an awesome job", "salary" => "$60k"],
        ["id" => 4, "title" => "Java Developer", "description" => "This is an awesome job", "salary" => "$60k"],
        ["id" => 5, "title" => "C# Developer", "description" => "This is an awesome job", "salary" => "$60k"]
    ];

    $job = collect($jobs)->firstWhere("id", $id);
    if (!$job) {
        abort(404);
    }

    return view("job", ["job" => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
