@extends('layout')
@section('title', 'Home')
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
                    <a class="nav-link active" href="#" style="padding-left: 10px;"><strong>Home</strong></a>
                </li>
                @if(Session::get('admin'))
                <li class="nav-item">
                    <a class="nav-link" href="#contact-us" style="padding-left: 10px;"><strong>Contact Us</strong></a>
                </li>
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
                    <a class="nav-link" href="#contact-us" style="padding-left: 10px;"><strong>Contact Us</strong></a>
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
    <div class="row">
        <div class="card mx-auto" id="home">
            <img class="card-img-top" src="{{ URL::asset('images/practo-logo.jpg')}}">
            <div class="card-body mx-auto">
                <h2 style="color: black; padding-bottom: 10px;">
                    Introducing Video Consultations.<br>
                    Don&apos;t delay your health concerns.
                </h2>
                <button class="btn btn-success" onclick="location.href='/new booking page';">Book a Diagnostic Test</button>
            </div>
        </div>
    </div>
</div>
<div class="container" id="details">
    <div class="row justify-content-around">
        <div class="col-11 col-lg-5 glossy" id="features" style="margin-bottom: 50px;">
            <img src="{{ URL::asset('images/features.png')}}" id="icon">
            <h2>Features</h2>
            <ul>
                <li><i class="fa fa-star"></i> Search doctors nearby</li>
                <li><i class="fa fa-star"></i> Online consultations</li>
                <li><i class="fa fa-star"></i> Book your appointments online</li>
                <li><i class="fa fa-star"></i> Setting up the reminders for the medicine</li>
                <li><i class="fa fa-star"></i> Online booking for a lab test</li>
                <li><i class="fa fa-star"></i> 24/7 service</li>
            </ul>
        </div>
        <div class="col-11 col-lg-5 glossy" id="advantages" style="margin-bottom: 50px;">
            <img src="{{ URL::asset('images/advantages.png')}}" id="icon">
            <h2>Advantages</h2>
            <ul>
                <li><i class="fa fa-trophy"></i> No Need to Travel</li>
                <li><i class="fa fa-trophy"></i> Improved ways to check your symptoms</li>
                <li><i class="fa fa-trophy"></i> Save Your Money</li>
                <li><i class="fa fa-trophy"></i> Privacy and Security</li>
                <li><i class="fa fa-trophy"></i> Comfortable and Convenient</li>
                <li><i class="fa fa-trophy"></i> No Risk of Infections From the Doctor's Clinic</li>
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
                    <span class="fa-stack fa-lg fa-rotate-90">
                        <i class="fa fa-square fa-stack-2x" style="color: black;"></i>
                        <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="#contact-us">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
@endsection