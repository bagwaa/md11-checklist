<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $checklist = [
        'Preparation' => [
        ],
        'Start Taxi' => [
        ],
        'Lights' => [
        ],
        'Take Off' => [
        ],
        'Climb' => [
        ],
        'Cruise' => [
        ],
        'Descent' => [
        ],
        'Landing' => [
        ],
        'Post Flight' => [
        ],
        'Power Down' => [
        ],
    ];

    return view('checklist', [
        'checklist' => $checklist,
    ]);
});
