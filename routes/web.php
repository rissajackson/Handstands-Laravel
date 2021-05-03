<?php

use Illuminate\Support\Facades\Route;
use App\Models\Handstand;
use Illuminate\Support\Facades\File;

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

Route::get('/handstands', function () {
	return view('handstands', [
		'handstands' => Handstand::all(),
	]);
});

Route::get('handstands/{handstand}', function ($slug) {	
	return view('handstand', [
		'handstand' => Handstand::find($slug),
	]);
})->where('handstand', '[A-z_\-]+');
