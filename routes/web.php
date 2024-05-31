<?php

use App\Events\testingEvent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    event(new testingEvent('hello'));
    return view('welcome');
});

Route::get('test',function(){
    event(new testingEvent('hello'));

    return 'done';
});