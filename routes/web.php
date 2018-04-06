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

Route::get('/','ContentsController@home');
Route::get('/client','ClientController@index');
Route::get('/client/new','ClientController@newClient');
Route::post('/client/new','ClientController@create');
Route::get('/client/{client_id}','ClientController@show');
Route::post('/client/{client_id}','ClientController@modify');


Route::get('/reservations/{client_id}','RoomsController@checkAvailableRooms');
Route::post('/reservations/{client_id}','RoomsController@checkAvailableRooms');


Route::get('/book/room/{client_id}/{date_in}/{date_out}','ReservationsController@bookRoom');


Route::get('/home', function () {

    return '<h1>The land on app</h1>';
});
Route::get('/about', function () {
    $version_arr=[];
    $version_arr['version']='0.1.2';
    $version_arr['author']='Abdoo';

    return $version_arr;
});

Route::get('/homy', function () {
    $data=[];
    $data['versions']='0.1.1';

    return view('welcome',$data);
});

Route::get('/di', 'ClientController@di');

Route::get('/facades/db', function () {


    return DB::select('SELECT * from table');
});

Route::get('/facades/encrypt', function () {
    $data=[];
    $data['versions']='0.1.1';

    return Crypt::encrypt('123456789');
});
Route::get('/facades/decrypt', function () {
    $data=[];
    $data['versions']='0.1.1';

    return Crypt::decrypt('eyJpdiI6Ind2Y2o2clRIaUlFOXd0VW9TRjRJb2c9PSIsInZhbHVlIjoicjBOOFhraFwvZkthc2trQTFOTHJsTU1qdTV5K01TYnJmXC9HK0E2amZkWDJZPSIsIm1hYyI6IjE5ZGIyNTQxNWZhYzFkMWRiZjI5NTM1MTMxYjQzZGMwMGZkYWYwMGEwNDYyY2ZlMmU3NTM5MmFhNTZlMTI1MWMifQ==');
});