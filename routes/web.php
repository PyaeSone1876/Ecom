<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});
//  User
Route::get('/users',[UserController::class,'index']);
Route::get('/users/{id}/edits',[UserController::class,'edit']); 
Route::post('/users/{id}/update',[UserController::class,'update']);
Route::post('/users/{id}/delete',[UserController::class,'delete']);
Route::get('/users/register',[UserController::class,'show']);

// Product
Route::get('/products',[ProductController::class,'index']);
Route::get('/products/create',[ProductController::class,'create']); // create form
Route::post('/products',[ProductController::class,'store']); //store data
Route::get('/products/{id}',[ProductController::class,'show']);//get by id
Route::get('/products/{id}/edit',[ProductController::class,'edit']);// edit form
Route::post('/products/{id}/update',[ProductController::class,'update']);// update data
Route::post('/products/{id}/delete',[ProductController::class,'delete']);

//client
Route::resource('clients',ClientController::class);

//category
Route::resource('categories',CategoryController::class);





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
