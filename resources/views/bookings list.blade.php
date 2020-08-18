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
                    <a class="nav-link" href="/" style="padding-left: 10px;"><strong>Home</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact-us" style="padding-left: 10px;"><strong>Contact Us</strong></a>
                </li>
                @if(Session::get('admin'))
                <li class="nav-item">
                    <a class="nav-link active" href="/bookings list" style="padding-left: 10px;"><strong>Bookings List</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/database" style="padding-left: 10px;"><strong>Database</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout" style="padding-left: 10px;"><strong>Logout</strong></a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="/#about" style="padding-left: 10px;"><strong>About</strong></a>
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
    @if(Session::get('delete'))
    <div class="row justify-content-around">
        <div class="col-11 alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{Session::get('delete')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif
    @if(Session::get('edit'))
    <div class="row justify-content-around">
        <div class="col-11 alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{Session::get('edit')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif
</div>
@if($data)
<div class="container" id="booking-list">
    <table class="table table-responsive">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Booking ID</th>
                <th scope="col">Name</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Prescription</th>
                <th scope="col">Test</th>
                <th scope="col">Lab</th>
                <th scope="col">Date</th>
                <th scope="col">Timeslot</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->contact_number}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->gender}}</td>
                <td><a target="_blank" href="uploads/{{$item->file_name}}">{{$item->file_name}}</a></td>
                <td>{{$item->test_name}}</td>
                <td>{{$item->lab_name}}</td>
                <td>{{$item->selected_date}}</td>
                <td>{{$item->timeslot}}</td>
                <td>
                    <a href="/edit/{{$item->id}}"><i class="fa fa-edit" style="color: black;"></i></a>
                    <a href="/delete/{{$item->id}}"><i class="fa fa-trash" style="color: red;"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row justify-content-around">
        {{$data->links()}}
    </div>
</div>
@else
<h1>Bookings List is Empty...</h1>
@endif
@endsection