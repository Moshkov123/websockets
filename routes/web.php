<?php

use App\Events\PrivateEvent;
use App\Events\testingEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    event(new PrivateEvent('hello',1));
    return view('welcome');
});

Route::get('test',function(){
    event(new testingEvent('hello'));

    return 'done';
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');