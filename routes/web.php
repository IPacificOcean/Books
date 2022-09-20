<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use \App\Http\Controllers\BookController;
use \App\Http\Controllers\AuthorController;

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
    return view('router');
});
Route::get('/admin_part_books', [BookController::class, 'create']);

Route::get('/admin_part_authors', [AuthorController::class, 'create']);

// Route::get('/public_part_authors', [AuthorController::class, 'show']);
Route::get('/public_part_authors', [BookController::class, 'show']);

// Route::get('/public_part_authors', function () {
//     return view('public_part_authors');
// });

Route::get('/admin_part_users', function () {
    return view('admin_part_users');
});

// Route::get('/user/{id}', [BookController::class, 'show']);

// Route::get('uses', [AuthorController::class, 'store'])->name('uses');

// Route::post('welcome/login', 'WelcomeController@login')->name('welcome.login');
