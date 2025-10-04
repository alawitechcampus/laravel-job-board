<?php

use App\Http\Controllers\JobController;
use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job', [JobController::class, 'index']);

