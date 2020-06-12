<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use Session;
use App\test;
use App\lab;
use App\tests_lab;
use App\User;
use App\booking;
use App\admin;
use Crypt;

class Practo extends Controller
{
    //
    function new_booking_page(){
        $tests = test::all();
        $labs = lab::all();
        return view('/new booking page', ['tests' => $tests, 'labs' => $labs]);
    }
    function new_booking(Request $req){
        $req->validate([
            "name" => "required",
            "contact_number" => "required|digits:10",
            "test" => "required",
            "prescription" => "required|max:5120",
            "lab" => "required",
        ]);
        $data = tests_lab::where(['test_id' => $req->input('test'), 'lab_id' => $req->input('lab')])->get();
        if($data->isEmpty()){
            $lab = $req->input('lab');
            $test = $req->input('test');
            Session::flash('status', "lab $lab does not provide test $test");
            return redirect('/new booking page');
        }
        else{
            $data = User::where(['name' => $req->input('name'), 'contact_number' => $req->input('contact_number')])->get();
            if($data->isEmpty()){
                $user = new User;
                $user->name = $req->input('name');
                $user->contact_number = $req->input('contact_number');
                $user->save();
            }
            $user = User::where(['name' => $req->input('name'), 'contact_number' => $req->input('contact_number')])->get();
            $booking = new booking;
            $booking->user_id = $user[0]->id;
            $booking->test_id = $req->input('test');
            $booking->lab_id = $req->input('lab');
            $booking->prescription = $req->file('prescription');
            $file = $req->file('prescription');
            $extension = $file->getClientOriginalExtension();
            $filename = $booking->user_id.'_'.time().'.'.$extension;
            $file->storeAs('uploads', $filename);
            $booking->file_name = $filename;
            $booking->save();
            Session::put('booking_id', $booking->id);
            Session::put('user_id', $booking->user_id);
            Session::put('user_name', $req->input('name'));
            Session::put('contact_number', $req->input('contact_number'));
            return redirect('/booking details');
        }
    }
    function booking_details(Request $req){
        $req->validate([
            "name" => "required",
            "contact_number" => "required|digits:10",
            "age" => "required|numeric|max:100",
            "email" => "required|email",
            "gender" => "required|in:male,female,other",
            "date" => "required|date|after:today",
            "timeslot" => "required",
            "details" => "required|max:209",
        ]);
        $user = User::find(Session::get('user_id'));
        $user->age = $req->input('age');
        $user->email = $req->input('email');
        $user->gender = $req->input('gender');
        $user->address = $req->input('details');
        $user->save();
        $booking = booking::find(Session::get('booking_id'));
        $booking->selected_date = $req->input('date');
        $booking->timeslot = $req->input('timeslot');
        $booking->save();
        Session::flash('status', 'Booking Confirmed!');
        return redirect('/');
    }
    function login(Request $req){
        $req->validate([
            "admin_name" => "required",
            "password" =>"required",
        ]);
        $data = admin::where(['admin_name' => $req->input('admin_name')])->get();
        if(!$data->isEmpty() and $data[0]->password == $req->input('password')){
            Session::put('admin', $req->input('admin_name'));
            return redirect('/');
        }
        Session::flash('login', 'Invalid Credentials! Please try again.');
        return redirect('/admin login');
    }
    function bookings_list(){
        $items = DB::select("select bookings.id, bookings.file_name, bookings.selected_date, bookings.timeslot, users.name, users.email,
                        users.contact_number, users.age, users.gender, tests.test_name, labs.lab_name
                        from users
                        join bookings on users.id = bookings.user_id
                        join tests on bookings.test_id = tests.id
                        join labs on bookings.lab_id = labs.id");
        $data = $this->paginate($items);
        return view('/bookings list', compact('data'));
    }
    public function paginate($items, $perPage = 10, $page = null){
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, [
            'path' => Paginator::resolveCurrentPath(),
            'pageName' => 'page',
        ]);
    }
    function logout(){
        Session::forget('admin');
        return redirect('/');
    }
    function delete($id){
        $booking = booking::find($id);
        if($booking){
            Storage::delete('uploads/'.$booking->file_name);
            $booking->delete();
            Session::flash('delete', 'Deleted Successfully!');
        }
        return redirect('/bookings list');
    }
}
