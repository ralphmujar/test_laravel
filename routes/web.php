<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

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

Route::post('/login', 'App\Http\Controllers\AuthController@login');

Route::get('/users', function () {
    return App\Models\User::all();
});


Route::get('/del', function(Request $request) {
	Session::put('id', $request->id);
	return Session::get('id');
});

Route::get('/home', function() {
	return Session::get('id');
});


Route::get('/img', 'ImageController@create');
Route::post('/img/store', 'ImageController@store');

