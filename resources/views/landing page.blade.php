@extends('layout')
@section('header')
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
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-us">Contact Us</a>
                    </li>
                    @if(Session::get('admin'))
                    <li class="nav-item">
                        <a class="nav-link" href="/bookings list">Bookings List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li> 
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/admin login">Admin Login</a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>
@endsection
@section('content')
<div class="container">
    @if(Session::get('errors'))
        <div class="row justify-content-around">
            <div class="col-11 alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{Session::get('errors')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
</div>
<div class="container">
    <div class="carousel slide" id="main-carousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#main-carousel" data-slide-to="1"></li>
            <li data-target="#main-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block img-fluid mx-auto" src="{{ URL::asset('images/slide 1.jpg')}}">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid mx-auto" src="{{ URL::asset('images/slide 2.jpg')}}">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid mx-auto" src="{{ URL::asset('images/slide 3.jpg')}}">
            </div>
        </div>
        <a href="#main-carousel" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only" aria-hidden="true">Prev</span>
        </a>
        <a href="#main-carousel" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only" aria-hidden="true">Next</span>
        </a>
    </div>
</div>
<div class="container">
    @if(Session::get('status'))
        <div class="row justify-content-around">
            <div class="col-11 alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{Session::get('status')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
</div>
<div class="container" id="home">
    <div class="row justify-content-around">
        <div class="col-11 col-md-5">
            <img src="{{ URL::asset('images/practo.png')}}" class="img img-responsive">
        </div>
        <div class="col-11 col-md-6 my-auto">
            <p>
                Introducing Video Consultations.<br>
                Don&apos;t delay your health concerns.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button class="btn btn-success" onclick="location.href='/new booking page';">Book a Diagnostic Test</button>
        </div>
    </div>
</div>
<div class="container" id="details">
    <div class="row justify-content-around">
        <div class="col-11 col-md-5" id="features">
            <h2>Features</h2>
            <ul>
                <li>Search doctors nearby</li>
                <li>Online consultations</li>
                <li>Book your appointments online</li>
                <li>Setting up the reminders for the medicine</li>
                <li>Online booking for a lab test</li>
                <li>24/7 service</li>
            </ul>
        </div>
        <div class="col-11 col-md-5" id="advantages">
            <h2>Advantages</h2>
            <ul>
                <li>No Need to Travel</li>
                <li>Improved ways to check your symptoms</li>
                <li>Save Your Money</li>
                <li>Privacy and Security</li>
                <li>Comfortable and Convenient</li>
                <li>No Risk of Infections From the Doctor's Clinic</li>
            </ul>
        </div>
    </div>
</div>
<div class="container" id="about">
    <div class="container">
        <h2>Your home for health</h2>
        <p>
            For millions of people, Practo is the trusted and familiar home where they know they&apos;ll find a healing touch. It connects them with everything they need to take good care of themselves and their family - assessing health issues, finding the right doctor, booking diagnostic tests, obtaining medicines, storing health records or learning new ways to live healthier.<br><br>
            Healthcare providers can also harness the power of Practo as the definitive platform that helps them build their presence, grow establishments and engage patients more deeply than ever.
        </p>
    </div>
    <div>
        <h2>Diverse people. One purpose.</h2>
        <p>We are dreamers, thinkers and do-ers rolled into one.Together, we want to improve the healthcare experience for all humanity. We are guided by our values and driven by our motto to do great. These are not just principles for our products or our company, but they are a reflection of who we are as people.</p>
    </div>
    <div>
        <h2>#DoGreat</h2>
        <p>Do Great is our motto and is the hallmark of a true Practeon. It signifies the intrinsic motivation in each Practeon to strive for excellence. Every time. This means Practeons do their best work, not for want of rewards or recognitions but because they expect it of themselves.</p>
    </div>
</div>
@endsection