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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/example', 'routename');

/*Route::get('/login',function(){
    echo "Esta es la URL del login";
})->name('login');
*/
Route::middleware('example.middleware')->prefix('/category')->name('category.')->group(function(){
    Route::prefix('/post')->name('post.')->group(function(){
        Route::get('/', function(){
            echo "Hola segundo";
        })->name('show');

        Route::get('/{isNew}', function(){
            echo "Hola tercero";
        })->name('new')->whereAlpha('isNew');

        Route::get('/edit/{id}', function(){
            echo "Hola tercero";
        });
    });
    Route::get('/my-first-level-example', function(){
        echo "Hola primer level";
    });
});