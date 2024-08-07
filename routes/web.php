<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\BingoJob;
use App\Models\JobListing;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    dispatch(function () {
        logger('Hello from the queue!');
    });

    BingoJob::dispatch(JobListing::first());

    return 'Done';
});

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::get('/jobs/create', [JobController::class, 'create'])
    ->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])
    ->middleware('auth');

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('update', 'job');
Route::patch('/jobs/{job}', [JobController::class, 'update'])
    ->middleware('auth')
    ->can('update', 'job');
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])
    ->middleware('auth')
    ->can('update', 'job');

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/{job}', [JobController::class, 'show']);

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
