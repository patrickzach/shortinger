<?php

use Illuminate\Support\Facades\Route;
use App\Models\Url;

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

Route::get('/{slug}', function (string $slug) {
    $url = Url::where('slug', $slug)->first();
    return redirect($url->redirect);
});

Route::get('/', function () {
    return view('welcome');
});
