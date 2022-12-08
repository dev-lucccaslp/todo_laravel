<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function() {
    //home page
    Route::get('/', [HomeController::class, 'index'])->name('home');
    //create
    Route::get('/task/new', [TaskController::class, 'create'])->name('task.create');
    Route::post('/task/create_action', [TaskController::class, 'create_action'])->name('task.create_action');
    //edit
    Route::get('/task/edit', [TaskController::class, 'edit'])->name('task.edit');
    Route::post('/task/edit_action',[TaskController::class, 'edit_action'])->name('task.edit_action');
    //update
    Route::post('/task/update', [TaskController::class, 'update'])->name('task.update');
    //delete
    Route::get('/task/delete', [TaskController::class, 'delete'])->name('task.delete');
    Route::get('/task', [TaskController::class, 'index'])->name('task.view');
    //logout
    Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
    }
);

//login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login',[AuthController::class, 'login_action'])->name('user.login_action');

//register
Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/register',[AuthController::class, 'register_action'])->name('user.register_action');
