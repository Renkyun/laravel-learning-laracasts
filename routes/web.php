<?php

use Illuminate\Support\Facades\Route;




Route::view('/about', 'about');
Route::view('/contact', 'contact');

//blade direcives
Route::get('/', function () {
  return view('welcome', [
    'tasks' => [
      'Go to the market',
      'Walk the dog',
      'Watch a tutorial video'
    ]
  ]);
});
