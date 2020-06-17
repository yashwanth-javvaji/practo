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

            #tests-list, #labs-list, #associations-list {
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
                background-color: rgba(255, 255, 0, 0.9);
                color: #000000;
            }

            tbody {
                display: block;
                max-height: 250px;
                overflow-y: auto;
            }

            thead, tbody tr {
                display: table;
                width: 100%;
                table-layout: fixed;
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
                        <a class="nav-link" href="/#home" style="padding-left: 10px;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#about" style="padding-left: 10px;">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#contact-us" style="padding-left: 10px;">Contact Us</a>
                    </li>
                    @if(Session::get('admin'))
                    <li class="nav-item">
                        <a class="nav-link" href="/bookings list" style="padding-left: 10px;">Bookings List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/database" style="padding-left: 10px;">Database</a>
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
                <div class="col-11 col-md-5" id="tests-list">
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
                    @if(Session::get('tests_error'))
                        <div class="row justify-content-around">
                            <div class="col-11 alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{Session::get('tests_error')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endif
                    @error('test')
                    <div class="row justify-content-around">
                        <div class="col-11 alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{$message}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    @enderror
                    <h2>Tests</h2>
                    <table class="table table-responsive-xs">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Test ID</th>
                                <th scope="col">Test Name</th>
                                <th scope="col">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tests as $item)
                            <tr>
                                <form method="post" action="edit_test">
                                @csrf
                                <td>{{$item->id}}</td>
                                <td>
                                    @if(Session::get('test_id') and (Session::get('test_id') == $item->id))
                                    <input class="form-control" type="hidden" name="test_id" value="{{$item->id}}">
                                    <input class="form-control" type="text" name="test" value="{{$item->test_name}}">
                                    @else
                                    {{$item->test_name}}
                                    @endif
                                </td>
                                <td>
                                    @if(Session::get('test_id') and (Session::get('test_id') == $item->id))
                                    <button type="submit" class="form-control btn btn-success">Save</button>
                                    @else
                                    <a href="/edit_test/{{$item->id}}"><i class="fa fa-edit" style="color: black;"></i></a>
                                    <a href="/delete_test/{{$item->id}}"><i class="fa fa-trash" style="color: red;"></i></a>
                                    @endif
                                </td>
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-around">
                        <div class="col-11">
                            <form method="post" action="add_tests">
                                @csrf
                                <div class="row justify-content-around">
                                    <div class="col-6">
                                        <div class="row">
                                            <input class="form-control" id="test_name" name="test_name" type="text" placeholder="Test Name" value="{{old('test_name')}}">
                                        </div>
                                        @error('test_name')
                                            <div class="row" style="padding-top: 10px;">
                                                <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <button class="form-control btn btn-success" type="submit">Add</button>
                                    </div>
                                </div>
                                @if(Session::get('test'))
                                    <div class="row" style="padding: 10px 0 0 10px;">
                                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{Session::get('test')}}</span>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-11 col-md-5" id="labs-list">
                    @if(Session::get('labs_db'))
                        <div class="row justify-content-around">
                            <div class="col-11 alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{Session::get('labs_db')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endif
                    @if(Session::get('labs_error'))
                        <div class="row justify-content-around">
                            <div class="col-11 alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{Session::get('labs_error')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endif
                    @error('lab')
                    <div class="row justify-content-around">
                        <div class="col-11 alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{$message}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    @enderror
                    <h2>Labs</h2>
                    <table class="table table-responsive-xs">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Lab ID</th>
                                <th scope="col">Lab Name</th>
                                <th scope="col">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($labs as $item)
                            <tr>
                                <form method="post" action="edit_lab">
                                @csrf
                                <td>{{$item->id}}</td>
                                <td>
                                    @if(Session::get('lab_id') and (Session::get('lab_id') == $item->id))
                                    <input class="form-control" type="hidden" name="lab_id" value="{{$item->id}}">
                                    <input class="form-control" type="text" name="lab" value="{{$item->lab_name}}">
                                    @else
                                    {{$item->lab_name}}
                                    @endif
                                </td>
                                <td>
                                    @if(Session::get('lab_id') and (Session::get('lab_id') == $item->id))
                                    <button type="submit" class="form-control btn btn-success">Save</button>
                                    @else
                                    <a href="/edit_lab/{{$item->id}}"><i class="fa fa-edit" style="color: black;"></i></a>
                                    <a href="/delete_lab/{{$item->id}}"><i class="fa fa-trash" style="color: red;"></i></a>
                                    @endif
                                </td>
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-around">
                        <div class="col-11">
                            <form method="post" action="add_labs">
                                @csrf
                                <div class="row justify-content-around">
                                    <div class="col-6">
                                        <div class="row">
                                            <input class="form-control" id="lab_name" name="lab_name" type="text" placeholder="Lab Name" value="{{old('lab_name')}}">
                                        </div>
                                        @error('lab_name')
                                            <div class="row" style="padding-top: 10px;">
                                                <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <button class="form-control btn btn-success" type="submit">Add</button>
                                    </div>
                                </div>
                                @if(Session::get('lab'))
                                    <div class="row" style="padding: 10px 0 0 10px;">
                                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{Session::get('lab')}}</span>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-around" id="associations-list">
                <div class="col-11">
                    @if(Session::get('associations_db'))
                        <div class="row justify-content-around">
                            <div class="col alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{Session::get('associations_db')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endif
                    <h2>Tests-Labs Association</h2>
                    <table class="table table-responsive-xs">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Test ID</th>
                                <th scope="col">Test Name</th>
                                <th scope="col">Lab ID</th>
                                <th scope="col">Lab Name</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($associations as $item)
                            <tr>
                                <td>{{$item->test_id}}</td>
                                <td>{{$item->test_name}}</td>
                                <td>{{$item->lab_id}}</td>
                                <td>{{$item->lab_name}}</td>
                                <td><a href="/delete_association/{{$item->test_id}}&amp;{{$item->lab_id}}"><i class="fa fa-trash" style="color: red;"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-around">
                        <div class="col-11">
                            <form method="post" action="add_associations">
                                @csrf
                                <div class="row justify-content-around">
                                    <div class="col-4">
                                        <div class="row">
                                            <input class="form-control" id="test_id" name="test_id" type="text" placeholder="Test ID" value="{{old('test_id')}}">
                                        </div>
                                        @error('test_id')
                                            <div class="row" style="padding-top: 10px;">
                                                <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <div class="row">
                                            <input class="form-control" id="lab_id" name="lab_id" type="text" placeholder="Lab ID" value="{{old('lab_id')}}">
                                        </div>
                                        @error('lab_id')
                                            <div class="row" style="padding-top: 10px;">
                                                <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-3">
                                        <button class="form-control btn btn-success" type="submit">Add</button>
                                    </div>
                                </div>
                                @if(Session::get('association'))
                                    <div class="row" style="padding: 10px 0 0 10px;">
                                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{Session::get('association')}}</span>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>