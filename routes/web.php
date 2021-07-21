<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PostController::class, 'index'])->name('welcome');
Route::get('/single-post/{id}', [PostController::class, 'show'])->name('singlePost');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/show-post-form', [App\Http\Controllers\HomeController::class, 'showPostForm'])->name('home.showPostForm');
Route::get('/home/post/{id}', [App\Http\Controllers\HomeController::class, 'showSinglePost'])->name('home.singlePost');
Route::get('/home/post/{id}/delete', [App\Http\Controllers\HomeController::class, 'deleteSinglePost'])->name('home.deleteSinglePost');



Route::post('/home/save-post', [App\Http\Controllers\HomeController::class, 'savePost'])->name('home.savePost');
