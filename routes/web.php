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

use app\http\controllers\alunocontroller;

Route::get('/',[alunocontroller::class, 'index']);
    
    
    Route::get('/teste', function () {
        return view('teste');
    });
    
    Route::get('produto/{id}', function ($id=1) {
        return view('product',['id' =>$id]);
});
