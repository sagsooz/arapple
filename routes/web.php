<?php

use App\Http\Controllers\MyshellController;
use App\Http\Controllers\ShellnameController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


Route::prefix('dashboard')->middleware('auth')->group(function(){
Route::get('/' , function(){return redirect(route('myshell.index'));})->name('dashboard');
Route::resource('/users', UserController::class);
Route::resource('/shells', ShellnameController::class);
Route::resource('/myshell', MyshellController::class);

});



Route::get('/cronjob', function(){
    return view('cronjob');
});