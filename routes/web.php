<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::prefix('dashboard')->group(function(){

Route::get('/' , function(){
    return view('admin.dashboard');
})->name('dashboard');


Route::resource('/users', UserController::class);

});


