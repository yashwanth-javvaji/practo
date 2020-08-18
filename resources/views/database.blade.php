@extends('layout')
@section('title', 'Database')
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
                    <a class="nav-link active" href="/database" style="padding-left: 10px;"><strong>Database</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout" style="padding-left: 10px;"><strong>Logout</strong></a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="#about" style="padding-left: 10px;"><strong>About</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#adminLogin" style="padding-left: 10px;"><strong>Admin Login</strong></a>
                </li>
                @endif
            </ul>
        </div>
    </nav>
</header>
<div class="container" id="database">
    <div class="row justify-content-around">
        <div class="col-11 col-md-5 glossy" id="tests-list">
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
            <table class="table table-responsive">
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
                            <div class="col-10">
                                <div class="form-group row pt-2">
                                    <div class="input-group">
                                        <input class="form-control" id="test_name" name="test_name" type="text" placeholder="Test Name" value="{{old('test_name')}}">
                                        <div class="input-group-append">
                                            <button class="form-control btn btn-success" type="submit">Add</button>
                                        </div>
                                    </div>
                                </div>
                                @error('test_name')
                                <div class="row" style="padding-top: 10px;">
                                    <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                                </div>
                                @enderror
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
        <div class="col-11 col-md-5 glossy" id="labs-list">
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
            <table class="table table-responsive">
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
                            <div class="col-10">
                                <div class="form-group row pt-2">
                                    <div class="input-group">
                                        <input class="form-control" id="lab_name" name="lab_name" type="text" placeholder="Lab Name" value="{{old('lab_name')}}">
                                        <div class="input-group-append">
                                            <button class="form-control btn btn-success" type="submit">Add</button>
                                        </div>
                                    </div>
                                </div>
                                @error('lab_name')
                                <div class="row" style="padding-top: 10px;">
                                    <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                                </div>
                                @enderror
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
    <div class="row justify-content-around glossy" id="associations-list">
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
            <table class="table table-responsive">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Test Name</th>
                        <th scope="col">Lab Name</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($associations as $item)
                    <tr>
                        <td>{{$item->test_name}}</td>
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
                                    <input class="form-control" id="test_id" name="test_id" type="text" placeholder="Test IDs(',' separated)" value="{{old('test_id')}}">
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