@extends('layout')
@section('title', 'Edit')
@section('content')
<header>
    <nav class="navbar fixed-top navbar-expand-md navbar-dark" id="navigation">
        <a class="navbar-brand" href="#">
            <img src="{{ URL::asset('images/logo.png')}}" height=30 width=30>
            Practo
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-content">
            <ul class="navbar-nav ml-auto" align="center">
                <li class="nav-item">
                    <a class="nav-link" href="/" style="padding-left: 10px;"><strong>Home</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact-us" style="padding-left: 10px;"><strong>Contact Us</strong></a>
                </li>
                @if(Session::get('admin'))
                <li class="nav-item">
                    <a class="nav-link" href="/bookings list" style="padding-left: 10px;"><strong>Bookings List</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/database" style="padding-left: 10px;"><strong>Database</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout" style="padding-left: 10px;"><strong>Logout</strong></a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="#about" style="padding-left: 10px;"><strong>About</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#adminLogin" style="padding-left: 10px;"><strong>Admin Login</strong></a>
                </li>
                @endif
            </ul>
        </div>
    </nav>
</header>
<div class="container">
    <div class="row justify-content-around">
        <div class="col-11 col-md-5 glossy" id="user-details">
            @if(Session::get('tests_db'))
            <div class="row justify-content-around">
                <div class="col-11 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('tests_db')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            @endif
            <form method="post" action="users_details">
                @csrf
                <div>
                    <h2>User Details</h2>
                </div>
                <div class="row justify-content-around">
                    <input class="form-control" type="hidden" name="user_id" value="{{$data[0]->user_id}}">
                    <div class="col-11">
                        <div class="row" style="padding-top: 15px;">
                            <label for="name">Name</label>
                        </div>
                        <div class="row">
                            @if(old('name'))
                            <input class="form-control" id="name" name="name" type="text" placeholder="Name" value="{{old('name')}}">
                            @else
                            <input class="form-control" id="name" name="name" type="text" placeholder="Name" value="{{$data[0]->name}}">
                            @endif
                        </div>
                        @error('name')
                        <div class="row" style="padding: 10px 0 0 10px;">
                            <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-11">
                        <div class="row" style="padding-top: 15px;">
                            <label for="contact_number">Contact Number</label>
                        </div>
                        <div class="row">
                            @if(old('contact_number'))
                            <input class="form-control" id="contact_number" name="contact_number" type="text" placeholder="Contact Number" value="{{old('contact_number')}}">
                            @else
                            <input class="form-control" id="contact_number" name="contact_number" type="text" placeholder="Contact Number" value="{{$data[0]->contact_number}}">
                            @endif
                        </div>
                        @error('contact_number')
                        <div class="row" style="padding: 10px 0 0 10px;">
                            <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-11">
                        <div class="row" style="padding-top: 15px;">
                            <label for="age">Age</label>
                        </div>
                        <div class="row">
                            @if(old('age'))
                            <input class="form-control" id="age" name="age" type="text" placeholder="Age" value="{{old('age')}}">
                            @else
                            <input class="form-control" id="age" name="age" type="text" placeholder="Age" value="{{$data[0]->age}}">
                            @endif
                        </div>
                        @error('age')
                        <div class="row" style="padding: 10px 0 0 10px;">
                            <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-11">
                        <div class="row" style="padding-top: 15px;">
                            <label for="email">Email</label>
                        </div>
                        <div class="row">
                            @if(old('email'))
                            <input class="form-control" id="email" name="email" type="email" placeholder="Email" value="{{old('email')}}">
                            @else
                            <input class="form-control" id="email" name="email" type="email" placeholder="Email" value="{{$data[0]->email}}">
                            @endif
                        </div>
                        @error('email')
                        <div class="row" style="padding: 10px 0 0 10px;">
                            <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-around" style="padding-top: 20px;">
                    <div class="col-11">
                        <div class="row">
                            <div class="form-check-inline">
                                <label class="form-check-label">Gender</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" id="option1" name="gender" value="male" {{ (old('gender') == 'male') ? 'checked' : '' }} {{ ($data[0]->gender == 'male') ? 'checked' : '' }}>Male
                                </label>
                            </div>&emsp;
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" id="option2" name="gender" value="female" {{ (old('gender') == 'female') ? 'checked' : '' }} {{ ($data[0]->gender == 'female') ? 'checked' : '' }}>Female
                                </label>
                            </div>&emsp;
                            <div class="form-check-inline disabled">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" id="option3" name="gender" value="other" {{ (old('gender') == 'other') ? 'checked' : '' }} {{ ($data[0]->gender == 'other') ? 'checked' : '' }}>Other
                                </label>
                            </div>
                        </div>
                        @error('gender')
                        <div class="row" style="padding: 10px 0 0 10px;">
                            <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-around" style="padding-top: 15px;">
                    <div class="col-11">
                        <div class="row">
                            <label for="details">Personal Details &amp Delivery Details</label>
                        </div>
                        <div class="row">
                            <textarea class="form-control" id="details" name="details" type="text" rows="5" style="color: black; text-align: left;">
                                @if(old('details'))
                                    {{old('details')}}
                                @else
                                    {{trim($data[0]->address, " ")}}
                                @endif
                                </textarea>
                        </div>
                        @error('details')
                        <div class="row" style="padding: 10px 0 0 10px;">
                            <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-around" style="padding-top: 20px;">
                    <div class="col-4 col-sm-3">
                        <button type="submit" class="form-control btn btn-success">Submit</button>
                    </div>
                    <div class="col-4 col-sm-3">
                        <a class="form-control btn btn-danger" href="/new booking page">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-11 col-md-5 glossy" id="booking-details">
            @if(Session::get('tests_db'))
            <div class="row justify-content-around">
                <div class="col-11 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('tests_db')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            @endif
            <form method="post" action="bookings_details">
                @csrf
                <div>
                    <h2>Booking Details</h2>
                </div>
                <div class="row justify-content-around">
                    <input class="form-control" type="hidden" name="booking_id" value="{{$data[0]->id}}">
                    <div class="col-11">
                        <div class="row" style="padding-top: 15px;">
                            <div class="col-4">
                                <label for="booking_id">Booking ID</label>
                            </div>
                            <div class="col-8">
                                <input class="form-control" id="booking_id" name="booking_id" type="text" value="{{$data[0]->id}}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-11">
                        <div class="row" style="padding-top: 15px;">
                            <div class="col-4">
                                <label for="user_name">User Name</label>
                            </div>
                            <div class="col-8">
                                <input class="form-control" id="user_name" name="user_name" type="text" value="{{$data[0]->name}}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-11">
                        <div class="row" style="padding-top: 15px;">
                            <label for="test">Select a Test(s)</label>
                        </div>
                        <div class="row">
                            <select class="form-control" id="test" name="test" type="text">
                                <option value="" selected>None</option>
                                @foreach($tests as $test)
                                <option value="{{$test->id}}" {{ (old('test') == $test->id) ? 'selected' : '' }} {{ ($data[0]->test_name == $test->test_name) ? 'selected' : '' }}>{{$test->test_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('test')
                        <div class="row" style="padding: 10px 0 0 10px;">
                            <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-11">
                        <div class="row" style="padding-top: 15px;">
                            <label for="lab">Select Lab</label>
                        </div>
                        <div class="row">
                            <select class="form-control" id="lab" name="lab" type="text">
                                <option value="" selected>None</option>
                                @foreach($labs as $lab)
                                <option value="{{$lab->id}}" {{ (old('lab') == $lab->id) ? 'selected' : '' }} {{ ($data[0]->lab_name == $lab->lab_name) ? 'selected' : '' }}>{{$lab->lab_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('lab')
                        <div class="row" style="padding: 10px 0 0 10px;">
                            <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                @if(Session::get('status'))
                <div class="row" style="padding: 10px 0 0 10px;">
                    <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{Session::get('status')}}</span>
                </div>
                @endif
                <div class="row justify-content-around">
                    <div class="col-11">
                        <div class="row" style="padding-top: 15px;">
                            <label for="prescription">Upload Prescription</label>
                        </div>
                        <div class="row">
                            <input class="form-control" id="prescription" name="prescription" type="file">
                        </div>
                        @error('prescription')
                        <div class="row" style="padding: 10px 0 0 10px;">
                            <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-11">
                        <div class="row" style="padding-top: 15px;">
                            <label for="date">Select Date</label>
                        </div>
                        <div class="row">
                            @if(old('date'))
                            <input class="form-control" id="date" name="date" type="date" value="{{old('date')}}">
                            @else
                            <input class="form-control" id="date" name="date" type="date" value="{{$data[0]->selected_date}}">
                            @endif
                        </div>
                        @error('date')
                        <div class="row" style="padding: 10px 0 0 10px;">
                            <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-11">
                        <div class="row" style="padding-top: 15px;">
                            <label for="timeslot">Pick a Timeslot</label>
                        </div>
                        <div class="row">
                            <select class="form-control" id="timeslot" name="timeslot" type="text">
                                <option value="" selected>--Select Timeslot--</option>
                                <option value="morning" {{ (old('timeslot') == 'morning') ? 'selected' : '' }} {{ ($data[0]->timeslot == 'morning') ? 'selected' : '' }}>Morning</option>
                                <option value="afternoon" {{ (old('timeslot') == 'afternoon') ? 'selected' : '' }} {{ ($data[0]->timeslot == 'afternoon') ? 'selected' : '' }}>Afternoon</option>
                                <option value="evening" {{ (old('timeslot') == 'evening') ? 'selected' : '' }} {{ ($data[0]->timeslot == 'evening') ? 'selected' : '' }}>Evening</option>
                            </select>
                        </div>
                        @error('timeslot')
                        <div class="row" style="padding: 10px 0 0 10px;">
                            <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-around" style="padding-top: 20px;">
                    <div class="col-4 col-sm-3">
                        <button type="submit" class="form-control btn btn-success">Submit</button>
                    </div>
                    <div class="col-4 col-sm-3">
                        <a class="form-control btn btn-danger" href="/new booking page">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>