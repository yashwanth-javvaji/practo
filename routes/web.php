<?php

use Illuminate\Support\Facades\Route;
use App\booking;

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
    Route::get('/bookings list/{id}/prescription', function($id){
        $booking = booking::find($id);
        return response()->make($booking->prescription, 200, array('Content-Type' => (new finfo(FILEINFO_MIME))->buffer($booking->prescription)));
    });
    Route::get('/delete/{id}', 'Practo@delete');
    Route::get('/database', 'Practo@database');
    Route::post('/add_tests', 'Practo@add_tests');
    Route::post('/add_labs', 'Practo@add_labs');
    Route::post('/add_associations', 'Practo@add_associations');
    Route::get('/delete_test/{id}', 'Practo@delete_test');
    Route::get('/delete_lab/{id}', 'Practo@delete_lab');
    Route::get('/delete_association/{test_id}&{lab_id}', 'Practo@delete_association');
    Route::get('/edit/{id}', 'Practo@edit');
    Route::post('edit/users_details', 'Practo@users_details');
    Route::post('edit/bookings_details', 'Practo@bookings_details');
    Route::get('/edit_test/{id}', function($id){
        Session::put('test_id', $id);
        return redirect('/database');
    });
    Route::post('/edit_test', 'Practo@edit_test');
    Route::get('/edit_lab/{id}', function($id){
        Session::put('lab_id', $id);
        return redirect('/database');
    });
    Route::post('/edit_lab', 'Practo@edit_lab');
});
