<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/addLib', [Model\User::class, 'addLib'])->middleware('auth', 'role');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/addHum', [Controller\Site::class, 'addHum']);
Route::add('GET', '/books', [Controller\Site::class, 'books']);
Route::add('GET', '/readers', [Controller\Site::class, 'readers']);
Route::add('GET', '/book', [Controller\Site::class, 'book']);
Route::add('GET', '/issue', [Controller\Site::class, 'issue']);
Route::add('GET', '/accept', [Controller\Site::class, 'accept']);
