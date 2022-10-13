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

$nome  ="lipe";
$ra = 22021048;
$arr = [1,2,3,4,5];

    return view('welcome',["nome" =>$nome, "ra" => $ra , 'arr'=> $arr]);
});

Route::get('/teste', function () {
    return view('teste');
});

Route::get('/teste/{id}', function ($id) {
    return view('test',['id' =>$id]);
});
