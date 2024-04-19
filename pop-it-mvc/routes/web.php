<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/addLib', [Controller\Admin::class, 'addLib'])->middleware('auth', 'role');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/book', [Controller\Site::class, 'book']);
Route::add('GET', '/accept', [Controller\Site::class, 'accept']);
Route::add('GET', '/reader', [Controller\Site::class, 'reader']);
Route::add(['GET', 'POST'], '/add_book', [Controller\Add::class, 'add_book']);
Route::add(['GET', 'POST'], '/add_reader', [Controller\Add::class, 'add_reader']);
Route::add(['GET', 'POST'], '/issue', [Controller\Add::class, 'issue']);
Route::add(['GET', 'POST'], '/add_author', [Controller\Add::class, 'add_author']);
Route::add(['GET', 'POST'], '/books', [Controller\Site::class, 'books']);
Route::add(['GET', 'POST'], '/readers', [Controller\Site::class, 'readers']);
Route::add(['GET', 'POST'], '/pictures', [Controller\Add::class, 'pictures']);

