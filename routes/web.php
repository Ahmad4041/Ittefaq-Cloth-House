<?php

use Illuminate\Support\Facades\Route;

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

// Mens Pages Route
Route::get('/', function () {
    return view('Home');
});

Route::get('/ShalwarKameez', function () {
    return view('ShalwarKameez');
});
Route::get('/unstichFabric', function () {
    return view('unstichFabric');
});
Route::get('/Kurta', function () {
    return view('Kurta');
});
// Womens Pages Routes
Route::get('/womens', function () {
    return view('womens');
});
Route::get('/eidwomen', function () {
    return view('eidwomen');
});
Route::get('/summerWomens', function () {
    return view('summerWomens');
});
Route::get('/exploreWomens', function () {
    return view('exploreNewwomens');
});
Route::get('/longshirtWomens', function () {
    return view('longshirtWomens');
});
Route::get('/unstichWomens', function () {
    return view('unstichWomens');
});
Route::get('/stichedWomens', function () {
    return view('stichedWomens');
});
