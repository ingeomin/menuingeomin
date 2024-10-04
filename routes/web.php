<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    $sample_variable = "hello world!";

    $sample_variable = substr($sample_variable,0,5);
    
    return view('welcome');
});
