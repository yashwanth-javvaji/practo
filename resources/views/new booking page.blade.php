@extends('layout')
@section('content')
<div class="container" id="booking-details">
    <form method="post" action="new_booking" enctype="multipart/form-data">
        @csrf
        <div>
            <h2>New Booking</h2>
        </div>
        <div class="row justify-content-around">
            <div class="col-11 col-md-5">
                <div class="row" style="padding-top: 15px;">
                    <label for="name">Name</label>
                </div>
                <div class="row">
                    <input class="form-control" id="name" name="name" type="text" placeholder="Name" value="{{old('name')}}">
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
                    <input class="form-control" id="contact_number" name="contact_number" type="text" placeholder="Contact Number" value="{{old('contact_number')}}">
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
                    <label for="test">Select a Test(s)</label>
                </div>
                <div class="row">
                    <select class="form-control" id="test" name="test" type="text">
                        <option value="" selected>None</option>
                        @foreach($tests as $test)
                        <option value="{{$test->id}}" {{ (old('test') == $test->id) ? 'selected' : '' }}>{{$test->test_name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('test')
                    <div class="row">
                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                    </div>
                @enderror
            </div>
            <div class="col-11 col-md-5">
                <div class="row" style="padding-top: 15px;">
                    <label for="prescription">Upload Prescription</label>
                </div>
                <div class="row">
                    <input class="form-control" id="prescription" name="prescription" type="file">
                </div>
                @error('prescription')
                    <div class="row">
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
                        <option value="{{$lab->id}}" {{ (old('lab') == $lab->id) ? 'selected' : '' }}>{{$lab->lab_name}}</option>
                        @endforeach
                    </select>
                </div>  
                @error('lab')
                    <div class="row">
                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                    </div>
                @enderror
                @if(Session::get('status'))
                    <div class="row">
                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{Session::get('status')}}</span>
                    </div>
                @endif 
            </div>
        </div>
        <div class="row justify-content-around" style="padding-top: 20px;">
            <div class="col-4 col-sm-3">
                <button type="submit" class="form-control btn btn-success">Submit</button>
            </div>
            <div class="col-4 col-sm-3">
                <a class="form-control btn btn-danger" href="/">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection