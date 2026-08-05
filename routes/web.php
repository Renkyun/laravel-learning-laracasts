<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Idea;





Route::get('/', function () {
  $idea = Idea::query()
    ->when(request('state'), function ($query, $state) {
      $query->where('state', $state);
    })
    ->get();



  return view('ideas', [
    'ideas' => $idea
  ]);
});

Route::post('/ideas', function () {
  $idea = request('idea');

  Idea::create([
    'description' => $idea,
    'state' => 'pending'
  ]);

  return redirect('/');
});

Route::get('/delete-ideas', function () {
  session()->forget('ideas');

  return redirect('/');
});
