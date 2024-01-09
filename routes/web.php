<?php

use Illuminate\Support\Facades\Route;
use App\Mail\NewUserWelcomeMail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("home",function(){
    return view ('home');
    });
    Auth::routes();

//example
Route::get("goodbye",function(){
return view ('goodbye');
});
Auth::routes();

Route::get('/email',function () {
    return new NewUserWelcomeMail;
});

Route::get('/search', [App\Http\Controllers\SearchController::class, 'index']);

Route::post('/follow/{user}', [App\Http\Controllers\FollowsController::class, 'store']);

Route::get('/', [App\Http\Controllers\PostsController::class, 'index']);

Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create']);

Route::post('/p', [App\Http\Controllers\PostsController::class, 'store']);

Route::get('/search', [App\Http\Controllers\PostsController::class, 'search']);

Route::get('/p/{post}', [App\Http\Controllers\PostsController::class, 'show']);

Route::delete('/delete/{post}',[App\Http\Controllers\PostsController::class, 'delete'])->middleware('auth');

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');
