<!-- GOAL: Come visto a lezione, riproporre un layout comune a 3 pagine comprensivo di header + navbar (sulla sinistra) + footer; complessita' di questi 3 componenti a piacere (va bene dalla scritta del <p> come visto questa mattina alla navbar di Amazon); le pagine dovranno invece definire un content (attraverso la tecnica vista yield/section/extends) come Home, About e Contact; anche in questo caso, la complessita' del content e' a piacere -->

<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  $content = "INDEX";
    return view('index', compact('content'));
});

Route::get('/about', function () {
  $content = "ABOUT";
  return view('index', compact('content'));
});

Route::get('/contact', function () {
  $content = "CONTACT";
  return view('index', compact('content'));
});
