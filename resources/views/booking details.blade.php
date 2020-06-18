@extends('layout')
@section('content')
<div class="container">
    <div class="glossy" id="booking-details">
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
                        <input class="form-control" id="name" name="name" type="text" placeholder="Name" value="{{old('name')}}">
                    @endif
                </div>
                @error('name')
                    <div class="row" style="padding: 10px 0 0 10px;">
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
                        <input class="form-control" id="contact_number" name="contact_number" type="text" placeholder="Contact Number" value="{{old('contact_number')}}">
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
            <div class="col-11 col-md-5">
                <div class="row" style="padding-top: 15px;">
                    <label for="age">Age</label>
                </div>
                <div class="row">
                    <input class="form-control" id="age" name="age" type="text" placeholder="Age" value="{{old('age')}}">
                </div>
                @error('age')
                    <div class="row" style="padding: 10px 0 0 10px;">
                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                    </div>
                @enderror
            </div>
            <div class="col-11 col-md-5">
                <div class="row" style="padding-top: 15px;">
                    <label for="email">Email</label>
                </div>
                <div class="row">
                    <input class="form-control" id="email" name="email" type="email" placeholder="Email" value="{{old('email')}}">
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
                <div class="row my-auto">
                    <div class="form-check-inline">
                        <label class="form-check-label">Gender</label>
                    </div>&emsp;&emsp;
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="option1" name="gender" value="male" {{ (old('gender') == 'male') ? 'checked' : '' }}>Male
                        </label>
                    </div>&emsp;
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="option2" name="gender" value="female" {{ (old('gender') == 'female') ? 'checked' : '' }}>Female
                        </label>
                    </div>&emsp;
                    <div class="form-check-inline disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="option3" name="gender" value="other" {{ (old('gender') == 'other') ? 'checked' : '' }}>Other
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
        <div class="row justify-content-around">
            <div class="col-11 col-md-5">
                <div class="row" style="padding-top: 15px;">
                    <label for="date">Select Date</label>
                </div>
                <div class="row">
                    <input class="form-control" id="date" name="date" type="date" value="{{old('date')}}">
                </div>
                @error('date')
                    <div class="row" style="padding: 10px 0 0 10px;">
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
                        <option value="" selected>None</option>
                        <option value="morning" {{ (old('timeslot') == 'morning') ? 'selected' : '' }}>Morning</option>
                        <option value="afternoon" {{ (old('timeslot') == 'afternoon') ? 'selected' : '' }}>Afternoon</option>
                        <option value="evening" {{ (old('timeslot') == 'evening') ? 'selected' : '' }}>Evening</option>
                    </select>
                </div>
                @error('timeslot')
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
                    <textarea class="form-control" id="details" name="details" type="text" rows="5" style="color: black; text-align: left;">{{old('details')}}</textarea>
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
</div>
@endsection