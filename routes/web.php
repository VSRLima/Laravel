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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/empresa', function () {
    return 'Sobre a empresa';
});

Route::any('/any', function () {
    return 'Any';
});

Route::match(['get', 'post'], '/match', function () {
    return 'match';
});
Route::get('/categoria/{flag}', function ($flag) {
    return "Produtos da categoria: {$flag}";
});

Route::get('/categorias/{flag}/posts', function ($flag) {
    return "Posts da categoria: {$flag}";
});

Route::get('/produtos/{idProduct?}', function ($idProduct = "") {
    return "Produtos {$idProduct}";
});

Route::redirect('/redirect1', 'redirect02');
// Route::get('redirect1', function () {
//     return redirect('/redirect02');
// });

Route::get('redirect02', function () {
    return "redirect 02";
});

Route::get('redirect03', function () {
    return redirect()->route('url.name');
});
Route::view('/view', 'welcome');

Route::get('/name-url', function() {
    return 'Hey hey hey';
})->name('url.name');

Route::get('/admin/dashboard', function() {
    return 'Home Admin';
});

Route::get('/admin/financeiro', function() {
    return 'Financeiro Admin';
});

Route::get('/admin/produtos', function() {
    return 'Produtos Admin';
});