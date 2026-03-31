<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\CerpenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view ('user.index');
});

Route::get('/blog', function(){
    return view ('user.blog-post');
});

Route::get('/contact', function(){
    return view('user.contact');
});

Route::get('/element', function(){
    return view('user.elements');
});

Route::get('/recipe', function(){
    return view('user.receipe-post');
});