<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Reviews;

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


Route::get('/review',[Reviews::class, 'Barang'])->name('barang.view');

Route::get('/detail/{id}', [Reviews::class, 'Detail'])->name('detail.view');
