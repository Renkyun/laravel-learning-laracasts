<?php

use Illuminate\Support\Facades\Route;




Route::view('/about', 'about');
Route::view('/contact', 'contact');


Route::view('/', 'welcome', [
  'greeting' => "Hello",
  'person' => request('person', 'World!')
]);
