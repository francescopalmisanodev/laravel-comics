<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $comics = config("comics-data");
    return view('home', [
        "comics" => $comics,
    ]);
})->name('home');

Route::get('/comic-{id}', function ($id) {
    $comics = config("comics-data");
    if (is_numeric($id) && $id >= 0 && $id <= count($comics)) {
        $comic = $comics[$id];
    } else {
        abort(404);
    }
    return view("comic-detail", [
        "comic" => $comic,
    ]);
})->name('comic-detail');
