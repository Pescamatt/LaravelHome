<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage', [
        'jobs' => [
            [
                'title' => 'Director',
                'salary' => '50.000'
            ],
            [
                'title' => 'Programmer',
                'salary' => '20.000'
            ],
            [
                'title' => 'Teacher',
                'salary' => '40.000'
            ]
        ]
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
