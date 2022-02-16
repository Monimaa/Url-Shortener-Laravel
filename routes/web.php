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
    return view('welcome');
});
Route::get('/urlshortener', function () {
    return view('urlshortener');
});


 Route::get('urlshortener', 'App\Http\Controllers\UrlViewController@view');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth']], function() {
   /**
   * Logout Route
   */
  Route::get('logout', 'App\Http\Controllers\LogoutController@perform');
});

  Route::get('dashboard', 'App\Http\Controllers\UrlViewController@index');
 Route::post('shorturl', 'App\Http\Controllers\ShortUrlController@shorturl');
Route::get('/{code}', 'App\Http\Controllers\ShortUrlController@show');

// Route::post('/shorturl', [ShortUrlController::class,'shorturl'])->name('shorturl.short');
