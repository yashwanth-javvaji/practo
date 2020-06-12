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
Route::group(['middleware'=>'web'], function(){
    Route::get('/', function(){
        Session::forget('booking_id');
        Session::forget('user_id');
        Session::forget('user_name');
        Session::forget('contact_number');
        return view('landing page');
    });
    Route::get('/new booking page', 'Practo@new_booking_page');
    Route::view('/booking details', 'booking details');
    Route::post('/new_booking', 'Practo@new_booking');
    Route::post('/booking_details', 'Practo@booking_details');
    Route::view('/admin login', 'admin login');
    Route::post('/admin_login', 'Practo@login');
    Route::get('/bookings list', 'Practo@bookings_list');
    Route::get('/logout', 'Practo@logout');
    Route::get('/addlabs', 'Practo@addlabs');
    Route::get('/addtests', 'Practo@addtests');
});
