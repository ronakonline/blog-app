<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\userController;
use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Home::class, 'index'])->name('home');
Route::get('blog/{id}',[BlogController::class,'index'])->name('blog')->middleware(['auth']);
Route::post('blog/create',[BlogController::class,'create'])->name('blog.create')->middleware(['auth']);
Route::get('/blogs',[BlogController::class,'userblogs'])->name('blogs')->middleware(['auth']);
Route::get('blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit')->middleware(['auth']);
Route::put('blog/update/{id}',[BlogController::class,'update'])->name('blog.update')->middleware(['auth']);
Route::get('blog/delete/{id}',[BlogController::class,'delete'])->name('blog.delete')->middleware(['auth']);

Route::get('/users',[userController::class ,'index'])->name('users')->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
