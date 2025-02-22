<?php

use Illuminate\Support\Facades\Route;
Use Illuminate\Support\Arr;

$jobs = [
    [
        'id' => 1,
        'title' => 'Director',
        'salary' => '50,000',
    ],
    [   'id' => 2,
        'title' => 'Teacher',
        'salary' => '40,000',
    ],
    [
        'id' => 3,
        'title' => 'Programmer',
        'salary' => '10,000',
    ]
    ];


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () use ($jobs) {
    return view('jobs', [
        'jobs' => $jobs
      ]);
    
});

Route::get('/jobs/{id}', function ($id) use($jobs) {
        
       $job = Arr::first($jobs, fn($job) => $job['id'] == $id
        );
            

    return view('job', ['job'=> $job]);
});

Route::get('/contact', function () {
    return view('contact');
});