<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main/hello');
});
Route::get('/about', function () {
    return view('main/about');
});

Route::get('/contact', function () {
    $contact = [
        'name' => 'Polytech',
        'adress' => 'B.Semenovskaya',
        'phone' => '8(123) 123-1234',
        'email' => '@mospolytech.ru',
    ];
    return view('main/contact', ['contact' => $contact]);
});
