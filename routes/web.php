<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistroController;
use App\Models\Registro;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;


Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/users', UserController::class);
Route::resource('/registros', RegistroController::class);



Route::get('crud/crear', [RegistroController::class, 'create'])->name('crud.crear');

Route::put('crud', [RegistroController::class, 'store'])->name('crud.store');

Route::get('crud/index', [RegistroController::class, 'index'])->name('crud.index');

Route::get('crud/pdf',  [App\Http\Controllers\RegistroController::class, 'pdf'])->name('crud.pdf');

Route::get('contactanos', function () {
    $correo = new ContactoMAilable;
    Mail::to($request->user('ivonne@gmail.com'))->send();


});






