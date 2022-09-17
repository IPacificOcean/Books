<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
Route::get('/admin_part_books', function () {
    return view('admin_part_books');
});
Route::get('/admin_part_authors', function () {
    return view('admin_part_authors');
});

Route::get('/posts', function () {
		return 'список постов';
	});
