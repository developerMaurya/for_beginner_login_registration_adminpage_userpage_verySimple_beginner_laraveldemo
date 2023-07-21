<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudmodelController;

// load login form 
Route::get('/', [CrudmodelController::class, 'index'])->name('login');
Route::post('/login', [CrudmodelController::class, 'handleLogin'])->name('handleLogin');

// load registration form
Route::get('/registration', [CrudmodelController::class, 'registrationView'])->name('registrations');
// when click on form for registration 
Route::post('/registration', [CrudmodelController::class, 'handleRegistration']);
// userpage
Route::get('/userpage', [CrudmodelController::class, 'userPageView'])->name('userpage');
// crud page
Route::get('/crud', [CrudmodelController::class, 'crudPageView'])->name('crud');
