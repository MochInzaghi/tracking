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
    return view('layout.login');
});

Route::view('/index', 'layout.index');

Route::middleware('auth')->group(function () {
    //datasurat
    Route::get('admin/index','\App\Http\Controllers\DataSuratController@index')->name('admin.surat');
    Route::get('admin/data-surat','\App\Http\Controllers\DataSuratController@table')->name('table.surat');
    Route::get('admin/data-surat/create', '\App\Http\Controllers\DataSuratController@create')->name('create.surat');
    Route::post('admin/data-surat/store', '\App\Http\Controllers\DataSuratController@store')->name('store.surat');
    Route::get('admin/data-surat/{data_surat:id}/edit', '\App\Http\Controllers\DataSuratController@edit')->name('edit.surat');
    Route::patch('admin/data-surat/{data_surat:id}/edit', '\App\Http\Controllers\DataSuratController@update');
    Route::get('admin/data-surat/{data_surat:id}/download', '\App\Http\Controllers\DataSuratController@download')->name('download.surat');
    Route::delete('admin/data_surat/{data_surat:id}/delete', '\App\Http\Controllers\DataSuratController@destroy');

    //verifikasi
    Route::get('admin/data-surat/{id}/verifikasi', '\App\Http\Controllers\VerifikasiController@create');
    Route::post('admin/data-surat/{id}/store', '\App\Http\Controllers\VerifikasiController@store');
});


// Disable Register
Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\DataSuratController::class, 'index'])->name('home');
