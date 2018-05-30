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


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/',function(){
        return 'Ini Halaman Admin';
    });
    Route::get('/nama',function(){
        return 'Nama Admin';
    });
    Route::get('kontak',function(){
        return 'Kontak Admin';
    });
});

Route::group(['prefix'=>'manager'],function(){

    Route::get('/',function(){
        return 'Ini Halaman Manager';
    });
    Route::get('/nama',function(){
        return 'Nama Manager';
    });
    Route::get('/posisi',function(){
        return 'Posisi Manager';
    });
    Route::get('/jabatan',function(){
        return 'Masa jabatan Manager';
    });
});


Route::group(['prefix'=>'karyawan'],function(){

        Route::get('/',function(){
            return 'Ini Halaman Karyawan';
        });
        Route::get('/nama',function(){
            return 'Nama Karyawan';
        });
        Route::get('/posisi',function(){
            return 'Posisi Karyawan';
        });
        Route::get('/jabatan',function(){
            return 'Masa jabatan Karyawan';
        });

    });

    




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
