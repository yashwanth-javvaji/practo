<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/258f31346d.js" crossorigin="anonymous"></script>
        <link rel = "icon" href =  
        "https://pbs.twimg.com/profile_images/849341342224351238/cuaVqp5x_400x400.jpg"
        type="image/x-icon">
        <style>
            body {
                background-color: #ffffff;
            }

            div {
                margin: 0;
            }

            header img {
                border-radius: 10%;
            }

            .navbar-dark {
                background-color: #000000;
                padding: 0;
            }

            .navbar-brand {
                margin-left: 20px;
                font-size: 20px;
            }

            .nav-link {
                font-size: 15px;
            }

            #navigation .active {
                background-color: #ffffff;
                color: #000000;
            }

            #navigation .nav-link:hover {
                background-color: #000080;
                color: #ffffff;
            }

            ul {
                list-style-type: none;
                text-decoration: none;
                text-align: left;
            }

            a {
                color: #ffffff;
            }

            a:hover {
                color: #ffff00;
            }

            .container {
                margin-top: 50px;
            }

            #home {
                margin: 10px;
                border-radius: 10px;
                text-align: center;
                color: #ffffff;
            }

            #home p {
                font-size: 20px;
            }

            #home button {
                font-size: 20px;
                color: #ffffff;
            }

            #practo {
                background-color: rgba(0, 0, 128, 0.9);
                border-radius: 10px 0 0 10px;
            }

            @media only screen and (max-width: 768px) {
                #practo {
                    height: 150px;
                    border-radius: 10px 10px 0 0;
                }
            }

            #details {
                text-align: center;
                color: #ffffff;
            }

            #details #features, #details #advantages, #about div, footer {
                padding: 20px;
                background-color: rgba(0, 0, 128, 0.9);
            }

            #details #features, #details #advantages {
                margin: 10px;
            }

            #details h2, #about h2, #contact-us h2 {
                padding-top: 10px;
                font-size: 40px;
            }

            #details p, #about p, #contact-us p {
                padding-top: 10px;
                font-size: 15px;
            }

            #about div {
                margin-bottom: 20px;
                text-align: center;
                color: #ffffff;
            }

            footer {
                margin-top: 50px;
                text-align: center;
                color: #ffffff;
            }

            #address {
                text-align: left;
            }

            #address p {
                padding: 0;
            }

            #quick-links h2 {
                padding: 10px 0 0 30px;
                font-size: 40px;
            }

            #quick-links ul {
                text-align: center;
            }

            #new-booking h2, #booking-details h2, #admin-login h2 {
                font-size: 40px;
                margin: 10px 0 10px 0;
            }

            #new-booking, #booking-details, #admin-login {
                padding: 20px;
                background-color: rgba(0, 0, 128, 0.9);
                text-align: center;
                color: #ffffff;
            }

            label {
                font-size: 15px;
            }

            #home {
                box-shadow: 5px 5px 10px #5f5f5f;
            }

            .btn {
                box-shadow: 3px 3px 6px #5f5f5f;
            }

            .form-control:hover {
                box-shadow: 3px 3px 6px #ff0000;
            }

            .form-control:focus {
                box-shadow: 3px 3px 6px #00ff00;
            }

            .btn:hover {
                box-shadow: 5px 5px 10px #5f5f5f;
                transform:scale(1.2,1.2);
                -webkit-transform:scale(1.2,1.2);
                -moz-transform:scale(1.2,1.2);
            }

            #features, #advantages {
                position: relative;
                top: 15px;
            }

            #icon{
                width: 120px;
                height: 120px;
                position: relative;
                top: -60px;
            }

            #features h2, #advantages h2 {
                position: relative;
                top: -35px;
            }

            #features ul, #advantages ul {
                position: relative;
                top: -10px;
            }

            .glossy {
                border-radius: 10px;
                background: #94c4fe;
                background: -webkit-gradient(linear, left top, left bottom, color-stop(25%,#800000), color-stop(100%,#000080));
                background: -webkit-linear-gradient(top,  #800000 25%,#000080 100%);
                background: -moz-linear-gradient(top,  #800000 25%, #000080 100%);
                background: -o-linear-gradient(top,  #800000 25%,#000080 100%);
                background: -ms-linear-gradient(top,  #800000 25%,#000080 100%);
                background: linear-gradient(to bottom,  #800000 25%,#000080 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#800000', endColorstr='#000080',GradientType=0 );
                border: 1px solid #4864a9;
                text-shadow: 1px 1px 0px #5f5f5f;
                -webkit-box-shadow:  5px 5px 10px #5f5f5f;    
                box-shadow: 5px 5px 10px #5f5f5f;
                position: relative;
            }

            .glossy:before {
                content: "";
                display: block;
                position: absolute;
                left: 5px;
                background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(255,255,255,0.7) 8%, rgba(255,255,255,0) 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(8%,rgba(255,255,255,0.7)), color-stop(100%,rgba(255,255,255,0)));
                background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0.7) 8%,rgba(255,255,255,0) 100%);
                background: -o-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0.7) 8%,rgba(255,255,255,0) 100%);
                background: -ms-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0.7) 8%,rgba(255,255,255,0) 100%);
                background: linear-gradient(to bottom,  rgba(255,255,255,1) 0%,rgba(255,255,255,0.7) 8%,rgba(255,255,255,0) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#00ffffff',GradientType=0 );
            }
        </style>
    </head>
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
                <ul class="navbar-nav ml-auto" style="text-align: left;">
                    <li class="nav-item">
                        <a class="nav-link" href="/#home" style="padding-left: 10px;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#about" style="padding-left: 10px;">About</a>
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
    @show
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        @yield('content')
    </body>
    <footer class="glossy" style="border-radius: 0;">
        <div class="row justify-content-around">
            <div class="col-11" id="contact-us">
                <h2>Contact Us</h2>
                <p>Have questions about our products, support services, or anything else? Let us know and we&apos;ll get back to you.</p>
                <div id="address">
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
        </div>
        <div class="row justify-content-around" id="quick-links">
            <div class="col-8 col-sm-5 col-md-4 col-lg-3">
                <h2>Social</h2>
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
            <div class="col-10 col-sm-7 col-md-5 col-lg-4">
                <h2>Quick Links</h2>
                <ul style="text-align: left;">
                    <li>
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-square fa-stack-2x" style="color: black;"></i>
                            <i class="fa fa-home fa-stack-1x fa-inverse"></i>
                        </span>
                        <a href="/#home">Home</a>
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
                            <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                        </span>
                        <a href="#contact-us">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <script>
        $('.navbar-nav>li>a').on('click', function(){
            $('.navbar-collapse').collapse('hide');
        });
    </script>
</html>