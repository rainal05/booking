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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    $alamat = \App\Profile::where('nama', 'Alamat')->get();
    $email = \App\Profile::where('nama', 'Email')->get();
    $hp = \App\Profile::where('nama', 'Telepon')->get();
    return view('welcome', compact('alamat', 'email', 'hp'));
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/akun/store', 'AkunController@store');

// ADMIN
Route::group(['middleware' => ['auth', 'HakRole:admin']], function () {
    //blok
    Route::group(['prefix' => 'blok'],     function () {
        Route::get('/', 'BlokController@index');
        Route::post('/store', 'BlokController@store');
        Route::get('/{id}/edit/', 'BlokController@edit');
        Route::post('/{id}/update', 'BlokController@update');
        Route::get('/{id}/delete/', 'BlokController@delete');
    });
    // rumah
    Route::group(['prefix' => 'perumahan'],     function () {
        Route::get('/', 'RumahController@index');
        Route::post('/store', 'RumahController@store');
        Route::get('/{id}/edit/', 'RumahController@edit');
        Route::post('/{id}/update', 'RumahController@update');
        Route::get('/{id}/delete/', 'RumahController@delete');
    });
    // data booking
    Route::group(['prefix' => 'data'],     function () {
        Route::get('/booking', 'BookingController@indata');
        Route::get('/booking/{id}', 'BookingController@detail');
        Route::get('/syarat/{id}', 'BookingController@lidata');
        Route::post('/syarat/up/{id}', 'BookingController@updata');
        // Route::get('/{id}/edit/', 'BlokController@edit');
        // Route::post('/{id}/update', 'BlokController@update');
        // Route::get('/{id}/delete/', 'BlokController@delete');
    });
    // profil
    Route::group(['prefix' => 'profile'],     function () {
        Route::get('/', 'ProfilController@index');
        Route::get('/edit/{id}', 'ProfilController@edit');
        Route::post('/update/{id}', 'ProfilController@update');
    });
    // akun
    Route::group(['prefix' => 'akun'],     function () {
        Route::get('/', 'UserController@index');
        Route::get('/{id}/detail', 'UserController@detail');
        Route::get('/{id}/delete/', 'UserController@delete');
    });
    // laporan
    Route::group(['prefix' => 'laporan'],     function () {
        Route::get('/', 'LaporanController@index');
        Route::get('/terbooking/{starterbooking}/{endterbooking}', 'LaporanController@terbooking');
        Route::get('/tersedia/{startersedia}/{endtersedia}', 'LaporanController@tersedia');
        Route::get('/pembooking/{book}/{king}', 'LaporanController@pembooking');
        Route::get('/filter', 'LaporanController@filter')->name('inbox.filter');
        // Route::get('/{id}/detail', 'LaporanController@detail');
        // Route::get('/{id}/edit/', 'RumahController@edit');
        // Route::post('/{id}/update', 'RumahController@update');
        // Route::get('/{id}/delete/', 'RumahController@delete');
    });
});

// PEMBELI
Route::group(['middleware' => ['auth', 'HakRole:user']], function () {
    //blok
    Route::group(['prefix' => 'booking'],     function () {
        Route::get('/rumah', 'BookingController@index');
        Route::get('/rumah/denah', 'BookingController@denah');
        Route::get('/{id}/cetak', 'BookingController@cetak');
        Route::post('/store', 'BookingController@store');
        Route::get('/syarat/{id}', 'BookingController@isisyarat');
        Route::post('/syarat/up', 'BookingController@upsyarat');
        // Route::get('/{id}/edit/', 'BlokController@edit');
        // Route::post('/{id}/update', 'BlokController@update');
        // Route::get('/{id}/delete/', 'BlokController@delete');
    });
    // rumah
    Route::group(['prefix' => 'perumahan'],     function () {
        // Route::get('/', 'RumahController@index');
        // Route::post('/store', 'RumahController@store');
        // Route::get('/{id}/edit/', 'RumahController@edit');
        // Route::post('/{id}/update', 'RumahController@update');
        // Route::get('/{id}/delete/', 'RumahController@delete');
    });
});
