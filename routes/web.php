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
    return "Hello World";
});

Route::get('/name', function () {
    return "Nika";
});

Route::get('/surname', function () {
    return "Gelashvili";
});

Route::get('/year', function () {
    return "21";
});

Route::get('/hobe', function () {
    return "reading";
});

Route::post('/save', function () {
    return response()->json([
        "msg" => "Saved!"
    ]);
});

Route::put('/add', function () {
    return response()->json([
        'msg' => 'Added successfully!'
    ]);
});

Route::delete('/delete', function () {
    return response()->json([
        'msg' => 'Deleted successfully!'
    ]);
});
