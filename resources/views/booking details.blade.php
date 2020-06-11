@extends('layout')
@section('content')
<div class="container" id="booking-details">
    <form method="post" action="booking_details">
        @csrf
        <div>
            <h2>Booking Details</h2>
        </div>
        <div class="row justify-content-around">
            <div class="col-11 col-md-5">
                <div class="row" style="padding-top: 15px;">
                    <label for="name">Name</label>
                </div>
                <div class="row">
                    @if(Session::get('user_name'))
                        <input class="form-control" id="name" name="name" type="text" placeholder="Name" value="{{Session::get('user_name')}}">
                    @else
                        <input class="form-control" id="name" name="name" type="text" placeholder="Name">
                    @endif
                </div>
                @error('name')
                    <div class="row">
                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                    </div>
                @enderror
            </div>
            <div class="col-11 col-md-5">
                <div class="row" style="padding-top: 15px;">
                    <label for="contact_number">Contact Number</label>
                </div>
                <div class="row">
                    @if(Session::get('contact_number'))
                        <input class="form-control" id="contact_number" name="contact_number" type="text" placeholder="Contact Number" value="{{Session::get('contact_number')}}">
                    @else
                        <input class="form-control" id="contact_number" name="contact_number" type="text" placeholder="Contact Number">
                    @endif
                </div>
                @error('contact_number')
                    <div class="row">
                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                    </div>
                @enderror
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="col-11 col-md-5">
                <div class="row" style="padding-top: 15px;">
                    <label for="age">Age</label>
                </div>
                <div class="row">
                    <input class="form-control" id="age" name="age" type="text" placeholder="Age">
                </div>
                @error('age')
                    <div class="row">
                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                    </div>
                @enderror
            </div>
            <div class="col-11 col-md-5">
                <div class="row" style="padding-top: 15px;">
                    <label for="email">Email</label>
                </div>
                <div class="row">
                    <input class="form-control" id="email" name="email" type="email" placeholder="Email">
                </div>
                @error('email')
                    <div class="row">
                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                    </div>
                @enderror
            </div>
        </div>
        <div class="row justify-content-around" style="padding-top: 20px;">
            <div class="col-11">
                <div class="row my-auto">
                    <div class="form-check-inline">
                        <label class="form-check-label">Gender</label>
                    </div>&emsp;&emsp;
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="option1" name="gender" value="male">Male
                        </label>
                    </div>&emsp;
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="option2" name="gender" value="female">Female
                        </label>
                    </div>&emsp;
                    <div class="form-check-inline disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="option3" name="gender" value="other">Other
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="col-11 col-md-5">
                <div class="row" style="padding-top: 15px;">
                    <label for="date">Select Date</label>
                </div>
                <div class="row">
                    <input class="form-control" id="date" name="date" type="date">
                </div>
                @error('date')
                    <div class="row">
                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                    </div>
                @enderror
            </div>
            <div class="col-11 col-md-5">
                <div class="row" style="padding-top: 15px;">
                    <label for="timeslot">Pick a Timeslot</label>
                </div>
                <div class="row">
                    <select class="form-control" id="timeslot" name="timeslot" type="text">
                        <option value="morning">Morning</option>
                        <option value="afternoon">Afternoon</option>
                        <option value="evening">Evening</option>
                    </select>
                </div>
                @error('timeslot')
                    <div class="row">
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
                    <textarea class="form-control" id="details" name="details" type="text" rows="5" style="color: black; text-align: left;"></textarea>
                </div>  
                @error('details')
                    <div class="row">
                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                    </div>
                @enderror  
            </div>
        </div>
        <div class="row justify-content-around" style="padding-top: 20px;">
            <div class="col-3">
                <input id="submit" type="submit" class="form-control btn btn-success">
            </div>
            <div class="col-3">
                <input id="cancel" class="form-control btn btn-danger" value="Cancel">
            </div>
        </div>
    </form>
</div>
@endsection