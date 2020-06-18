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
                        <a class="nav-link active" href="/admin login" style="padding-left: 10px;">Admin Login</a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>
@endsection
@section('content')
<div class="container">
    @if(Session::get('login'))
        <div class="row justify-content-around">
            <div class="col-11 alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{Session::get('login')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
</div>
<div class="container glossy" id="admin-login">
    <form method="post" action="admin_login">
        @csrf
        <div>
            <h2>Admin Login</h2>
        </div>
        <div class="row justify-content-around">
            <div class="col-11 col-md-5">
                <div class="row" style="padding-top: 15px;">
                    <label for="admin_name">Admin Name</label>
                </div>
                <div class="row">
                    <input class="form-control" id="admin_name" name="admin_name" type="text" placeholder="Admin Name">
                </div>
                @error('admin_name')
                    <div class="row" style="padding: 10px 0 0 10px;">
                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                    </div>
                @enderror
            </div>
            <div class="col-11 col-md-5">
                <div class="row" style="padding-top: 15px;">
                    <label for="password">Password</label>
                </div>
                <div class="row">
                    <input class="form-control" id="password" name="password" type="password" placeholder="Password">
                </div>
                @error('password')
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
                <a class="form-control btn btn-danger" href="/">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection