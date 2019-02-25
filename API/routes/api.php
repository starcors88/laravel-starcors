<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('nama', function(){
    return "Namaku Photograper";
});
Route::get('category/{id?}', function ($id=null){
    $categories = [
        1 => 'Programing',
        2 => 'Sistem',
        3 => 'analis',
    ];
    $id = (int) $id;
    if ($id==0) return 'Silahkan pilih kategori';
    else return 'Anda memilih kategori <b>'.$categories[$id].'</b>';
});

Route::prefix('v1')->group (function(){
    Route::get('books', function(){
        return "<b>BOOKS</b>";

    });
    Route::get('categories', function(){
        return "<b>CATEGORIES</b>";

    });
});

