@extends('layout')
@section('title', 'Home')
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
                        <a class="nav-link" href="#home" style="padding-left: 10px;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" style="padding-left: 10px;">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-us" style="padding-left: 10px;">Contact Us</a>
                    </li>
                    @if(Session::get('admin'))
                    <li class="nav-item">
                        <a class="nav-link" href="/bookings list" style="padding-left: 10px;">Bookings List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/database" style="padding-left: 10px;">Database</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout" style="padding-left: 10px;">Logout</a>
                    </li> 
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/admin login" style="padding-left: 10px;">Admin Login</a>
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
                <img class="d-block img-fluid mx-auto rounded" src="{{ URL::asset('images/slide 1.png')}}">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid mx-auto rounded" src="{{ URL::asset('images/slide 2.png')}}">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid mx-auto rounded" src="{{ URL::asset('images/slide 3.png')}}">
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
<div class="container">
    <div class="row justify-content-around" id="home">
        <div class="col-sm-12 col-md-5" id="practo">
            <img src="{{ URL::asset('images/practo.png')}}" class="my-auto img img-responsive" style="width: 100%; height: auto; position: absolute; top: 0; bottom: 0; left: 0; right: 0; margin: auto;">
        </div>
        <div class="col-sm-12 col-md-7" style="padding: 20px;">
            <h2 style="color: black; padding-bottom: 10px;">
                Introducing Video Consultations.<br>
                Don&apos;t delay your health concerns.
            </h2>
            <button class="btn btn-success" onclick="location.href='/new booking page';">Book a Diagnostic Test</button>
        </div>
    </div>
</div>
<div class="container" id="details">
    <div class="row justify-content-around">
        <div class="col-11 col-md-5 glossy" id="features" style="margin-bottom: 50px;">
            <img src="{{ URL::asset('images/features.png')}}" id="icon">
            <h2>Features</h2>
            <ul>
                <li><i class="fa fa-star" style="color: black;"></i> Search doctors nearby</li>
                <li><i class="fa fa-star" style="color: black;"></i> Online consultations</li>
                <li><i class="fa fa-star" style="color: black;"></i> Book your appointments online</li>
                <li><i class="fa fa-star" style="color: black;"></i> Setting up the reminders for the medicine</li>
                <li><i class="fa fa-star" style="color: black;"></i> Online booking for a lab test</li>
                <li><i class="fa fa-star" style="color: black;"></i> 24/7 service</li>
            </ul>
        </div>
        <div class="col-11 col-md-5 glossy" id="advantages" style="margin-bottom: 50px;">
        <img src="{{ URL::asset('images/advantages.png')}}" id="icon">
            <h2>Advantages</h2>
            <ul>
                <li><i class="fa fa-trophy" style="color: black;"></i> No Need to Travel</li>
                <li><i class="fa fa-trophy" style="color: black;"></i> Improved ways to check your symptoms</li>
                <li><i class="fa fa-trophy" style="color: black;"></i> Save Your Money</li>
                <li><i class="fa fa-trophy" style="color: black;"></i> Privacy and Security</li>
                <li><i class="fa fa-trophy" style="color: black;"></i> Comfortable and Convenient</li>
                <li><i class="fa fa-trophy" style="color: black;"></i> No Risk of Infections From the Doctor's Clinic</li>
            </ul>
        </div>
    </div>
</div>
<div class="container" id="about" style="margin-top: 0;">
    <div class="glossy">
        <h2>Your home for health</h2>
        <p>
            For millions of people, Practo is the trusted and familiar home where they know they&apos;ll find a healing touch. It connects them with everything they need to take good care of themselves and their family - assessing health issues, finding the right doctor, booking diagnostic tests, obtaining medicines, storing health records or learning new ways to live healthier.<br><br>
            Healthcare providers can also harness the power of Practo as the definitive platform that helps them build their presence, grow establishments and engage patients more deeply than ever.
        </p>
    </div>
    <div class="glossy">
        <h2>Diverse people. One purpose.</h2>
        <p>We are dreamers, thinkers and do-ers rolled into one.Together, we want to improve the healthcare experience for all humanity. We are guided by our values and driven by our motto to do great. These are not just principles for our products or our company, but they are a reflection of who we are as people.</p>
    </div>
    <div class="glossy">
        <h2>#DoGreat</h2>
        <p>Do Great is our motto and is the hallmark of a true Practeon. It signifies the intrinsic motivation in each Practeon to strive for excellence. Every time. This means Practeons do their best work, not for want of rewards or recognitions but because they expect it of themselves.</p>
    </div>
</div>
@endsection