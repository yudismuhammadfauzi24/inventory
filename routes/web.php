<?php

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

/**
 * mendaftarkan url atau route baru
 * untuk master-barang
 */

 route::group(['prefix' => 'master-barang'], function(){
     Route::get('/index', 'MasterBarang\MasterBarangController@index')->name('master-barang');
     Route::get('/formulir-barang','MasterBarang\MasterBarangController@create')->name('master-barang.formulir-barang');
     Route::get('laporan-barang', 'Laporan\BarangController@index')->name('laporan.periode.barang');
     Route::get('/edit/{barang}', 'MasterBarang\MasterBarangController@edit')->name('master-barang.edit');
     Route::patch('/update/{barang}', 'MasterBarang\MasterBarangController@update')->name('master-barang.update');
     Route::post('store', 'MasterBarang\MasterBarangController@store')->name('master-barang.store');
     Route::get('/show/{barang}', 'MasterBarang\MasterBarangController@show')->name('master-barang.show');
     Route::delete('/delete/{barang}', 'MasterBarang\MasterBarangController@destroy')->name('master-barang.delete');
 });
 route::group(['prefix' => 'transaksi'], function(){
    Route::get('/index', 'Transaksi\TransaksiController@index')->name('transaksi');
    Route::get('/create', 'Transaksi\BarangKeluarController@create')->name('transaksi.barang-keluar');
    Route::post('store','Transaksi\BarangKeluarController@store')->name('transaksi.store');
});
route::group(['prefix' => 'suplier'], function(){
    Route::get('/index', 'Suplier\SuplierController@index')->name('suplier');
    Route::get('/create', 'Suplier\SuplierController@create')->name('suplier.create');
    Route::get('laporan-suplier', 'Laporan\SuplierController@index')->name('laporan.periode.suplier');
    Route::post('store', 'Suplier\SuplierController@store')->name('suplier.store');
    Route::get('/edit/{suplier}', 'Suplier\SuplierController@edit')->name('suplier.edit');
    Route::patch('update/{suplier}','Suplier\SuplierController@update')->name('suplier.update');
    Route::delete('delete/{suplier}','Suplier\SuplierController@destroy')->name('suplier.delete');
});

