<?php

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
    return view('welcome2');
});

Route::get('/handstands', function () {
	return view('handstands');
});

Route::get('handstands/{handstand}', function ($slug) {
	$path = __DIR__ . "/../resources/handstands/{$slug}.html";

	if (! file_exists($path)) {
		return redirect('/handstands');
	}
	$handstand = file_get_contents($path);
	return view('handstand', [
		'handstand' => $handstand,
	]);
});
