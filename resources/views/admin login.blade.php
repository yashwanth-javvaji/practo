@extends('layout')
@section('title', 'Admin Login')
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
<div class="container">
    <div class="glossy" id="admin-login">
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
</div>
@endsection