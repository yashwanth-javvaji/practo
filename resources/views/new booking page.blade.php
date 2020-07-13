@extends('layout')
@section('title', 'New Booking')
@section('content')
<header>
    <nav class="navbar fixed-top navbar-expand-md navbar-dark" id="navigation">
        <a class="navbar-brand" href="/">
            <img src="{{ URL::asset('images/logo.png')}}" height=30 width=30>
            <strong>Practo</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-content">
            <ul class="navbar-nav ml-auto" style="text-align: left;">
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
                    <a class="nav-link" href="/#about" style="padding-left: 10px;"><strong>About</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#adminLogin"><strong>Admin Login</strong></a>
                </li>
                @endif
            </ul>
        </div>
    </nav>
</header>
<div class="container">
    <div class="glossy" id="booking-details">
        <form method="post" action="new_booking" enctype="multipart/form-data">
            @csrf
            <div>
                <h2>New Booking</h2>
            </div>
            <div class="row justify-content-around">
                <div class="col-11 col-md-5">
                    <div class="form-group row pt-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-white w-100 bg-primary"><i>Name</i></span>
                            </div>
                            <input class="form-control" id="name" name="name" type="text" placeholder="Name" value="{{old('name')}}">
                        </div>
                    </div>
                    @error('name')
                    <div class="row" style="margin: -7px 0 0 0;">
                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                    </div>
                    @enderror
                </div>
                <div class="col-11 col-md-5">
                    <div class="form-group row pt-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-white w-100 bg-primary"><i>Contact Number</i></span>
                            </div>
                            <input class="form-control" id="contact_number" name="contact_number" type="text" placeholder="Contact Number" value="{{old('contact_number')}}">
                        </div>
                    </div>
                    @error('contact_number')
                    <div class="row" style="margin: -7px 0 0 0;">
                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="col-11 col-md-5">
                    <div class="form-group row pt-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-white w-100 bg-primary"><i>Select a Test</i></span>
                            </div>
                            <select class="form-control" id="test" name="test" type="text">
                                <option value="" selected>None</option>
                                @foreach($tests as $test)
                                <option value="{{$test->id}}" {{ (old('test') == $test->id) ? 'selected' : '' }}>{{$test->test_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @error('test')
                    <div class="row" style="margin: -7px 0 0 0;">
                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                    </div>
                    @enderror
                </div>
                <div class="col-11 col-md-5">
                    <div class="form-group row pt-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-white w-100 bg-primary"><i>Select a Lab</i></span>
                            </div>
                            <select class="form-control" id="lab" name="lab" type="text">
                                <option value="" selected>None</option>
                                @foreach($labs as $lab)
                                <option value="{{$lab->id}}" {{ (old('lab') == $lab->id) ? 'selected' : '' }}>{{$lab->lab_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @error('lab')
                    <div class="row" style="margin: -7px 0 0 0;">
                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                    </div>
                    @enderror
                    @if(Session::get('status'))
                    <div class="row" style="margin: -7px 0 0 0;">
                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{Session::get('status')}}</span>
                    </div>
                    @endif
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="col-11">
                    <div class="form-group row pt-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-white w-100 bg-primary"><i>Upload Prescription</i></span>
                            </div>
                            <input class="form-control" id="prescription" name="prescription" type="file">
                        </div>
                    </div>
                    @error('prescription')
                    <div class="row" style="margin: -7px 0 0 0;">
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
                    <a class="form-control btn btn-danger" href="/">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
<footer>
    <div class="row justify-content-around">
        <div class="col-11 text-center" id="contact-us">
            <h2>Contact Us</h2>
            <p>Have questions about our products, support services, or anything else? Let us know and we&apos;ll get back to you.</p>
        </div>
        <div class="col-11 text-center" id="address">
            <h4>Address</h4>
            <p>Salarpuria symbiosis Arekere Village Begur, Bannerghatta Main Rd, Venugopal Reddy Layout, Uttarahalli Hobli, Bengaluru, Karnataka 560076</p>
            <span class="fa-stack fa-lg">
                <i class="fa fa-square fa-stack-2x" style="color: black;"></i>
                <i class="fas fa-blog fa-stack-1x fa-inverse"></i>
            </span>
            <a href="https://blog.practo.com/" data-toggle="tooltip" data-placement="right" title="Our Blog">Blog</a><br>
            <span class="fa-stack fa-lg">
                <i class="fa fa-square fa-stack-2x" style="color: black;"></i>
                <i class="fa fa-newspaper-o fa-stack-1x fa-inverse"></i>
            </span>
            <a href="https://www.practo.com/company/press" data-toggle="tooltip" data-placement="right" title="Latest News">Press</a>
        </div>
    </div>
    <div class="row justify-content-around" id="quick-links">
        <div class="col-8 col-sm-5 col-md-4 col-lg-3">
            <h2 style="text-align: left; padding-left: 54px;">Social</h2>
            <ul style="text-align: left;">
                <li>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-square fa-stack-2x" style="color: black;"></i>
                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="https://www.facebook.com/practo">Facebook</a></li>
                <li>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-square fa-stack-2x" style="color: black;"></i>
                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="https://twitter.com/Practo">Twitter</a>
                </li>
                <li>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-square fa-stack-2x" style="color: black;"></i>
                        <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="https://www.linkedin.com/company/practo-technologies-pvt-ltd">Linkedin</a>
                </li>
                <li>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-square fa-stack-2x" style="color: black;"></i>
                        <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="https://www.youtube.com/user/PractoSupport">Youtube</a>
                </li>
                <li>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-square fa-stack-2x" style="color: black;"></i>
                        <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="https://github.com/practo">Github</a>
                </li>
            </ul>
        </div>
        <div class="col-12 col-sm-7 col-md-5 col-lg-4">
            <h2 style="text-align: left; padding-left: 48px;">Quick Links</h2>
            <ul style="text-align: left;">
                <li>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-square fa-stack-2x" style="color: black;"></i>
                        <i class="fa fa-home fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="/">Home</a>
                </li>
                <li>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-square fa-stack-2x" style="color: black;"></i>
                        <i class="fa fa-ticket fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="/new booking page">Book a Diagnostic Test</a>
                </li>
                <li>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-square fa-stack-2x" style="color: black;"></i>
                        <i class="fa fa-info fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="/#about">About</a>
                </li>
                <li>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-square fa-stack-2x" style="color: black;"></i>
                        <i class="fa fa-phone fa-stack-1x fa-inverse fa-rotate-90"></i>
                    </span>
                    <a href="#contact-us">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
@endsection