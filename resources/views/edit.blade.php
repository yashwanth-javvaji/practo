<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/258f31346d.js" crossorigin="anonymous"></script>
    <link rel="icon" href="https://pbs.twimg.com/profile_images/849341342224351238/cuaVqp5x_400x400.jpg" type="image/x-icon">
    <style>
        body {
            background-color: #5f5f5f;
            margin: 0;
            padding: 0;
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

        .container {
            margin-top: 50px;
        }

        #user-details,
        #booking-details {
            margin: 10px;
            padding: 10px 20px 20px 20px;
            background-color: rgba(0, 0, 0, 0.7);
            text-align: center;
            color: #ffffff;
        }

        h2 {
            font-size: 40px;
        }

        table {
            color: #ffffff;
            text-align: center;
        }

        tr:nth-child(odd) {
            background-color: rgba(0, 0, 128, 0.9);
        }

        tr:nth-child(even) {
            background-color: rgba(0, 0, 128, 0.5);
        }

        tr:hover {
            background-color: rgba(0, 128, 0, 0.9);
        }

        tbody {
            display: block;
            max-height: 250px;
            overflow-y: auto;
        }

        thead,
        tbody tr {
            display: table;
            width: 100%;
            table-layout: fixed;
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

            .btn:hover, i:hover {
                box-shadow: 5px 5px 10px #5f5f5f;
                transform:scale(1.2,1.2);
                -webkit-transform:scale(1.2,1.2);
                -moz-transform:scale(1.2,1.2);
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
                    <a class="nav-link" href="/" style="padding-left: 10px;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#about" style="padding-left: 10px;">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#contact-us" style="padding-left: 10px;">Contact Us</a>
                </li>
                @if(Session::get('admin'))
                <li class="nav-item">
                    <a class="nav-link active" href="/bookings list" style="padding-left: 10px;">Bookings List</a>
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

<body>
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
                            <div class="row my-auto">
                                <div class="form-check-inline">
                                    <label class="form-check-label">Gender</label>
                                </div>&emsp;&emsp;
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
</body>
<script>
    $('textarea').val($('textarea').val().trim());
    $('.navbar-nav>li>a').on('click', function(){
        $('.navbar-collapse').collapse('hide');
    });
    $(document).click(function (event) {
        $('.navbar-collapse').collapse('hide');
    });
    $('textarea').on('keyup paste', function(){
        var text = $(this).val();
        $(this).val(text.trimLeft());
    });
</script>

</html>