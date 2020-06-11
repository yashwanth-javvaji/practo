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
                        <a class="nav-link" href="/#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#about">About</a>
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
                        <a class="nav-link active" href="/admin login">Admin Login</a>
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
<div class="container" id="admin-login">
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
                    <div class="row">
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
                    <div class="row">
                        <span style="color: red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp{{$message}}</span>
                    </div>
                @enderror
            </div>
        </div>
        <div class="row justify-content-around" style="padding-top: 20px;">
            <div class="col-3">
                <input id="submit" type="submit" class="form-control btn btn-success">
            </div>
            <div class="col-3">
                <input id="cancel" class="form-control btn btn-danger" value="Cancel">
            </div>
        </div>
    </form>
</div>
@endsection