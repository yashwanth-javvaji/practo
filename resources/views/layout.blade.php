<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practo | @yield('title') Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/258f31346d.js" crossorigin="anonymous"></script>
    <link rel="icon" href="https://pbs.twimg.com/profile_images/849341342224351238/cuaVqp5x_400x400.jpg" type="image/x-icon">
    <style>
        body {
            background-image: url("{{ URL::asset('images/home-bg.png')}}");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding-top: 25px;
        }

        div {
            margin: 0;
        }

        i {
            margin: 0 auto;
        }

        header img {
            border-radius: 10%;
        }

        .navbar-dark {
            background-color: #000000;
            padding: 0;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        }

        .navbar-brand {
            margin-left: 5px;
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

        .navbar-brand img {
            margin-bottom: 2px;
        }

        .navbar-brand strong {
            padding-top: 2px;
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

        #details i {
            color: #0000ff;
            animation: spin 2s infinite linear;
        }

        @keyframes spin {
            0% {
                transform: rotateY(0deg);
            }
            50% {
                transform: rotateY(180deg);
            }
            100% {
                transform: rotateY(360deg);
            }
        }

        #details {
            text-align: center;
            color: #ffffff;
        }

        #details #features,
        #details #advantages,
        #about div,
        footer {
            padding: 20px;
            background-color: rgba(0, 0, 128, 0.9);
        }

        #details #features,
        #details #advantages {
            margin: 10px;
        }

        #details h2,
        #about h2,
        #contact-us h2 {
            padding-top: 10px;
            font-size: 40px;
        }

        #details p,
        #about p,
        #contact-us p {
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
            padding-top: 30px;
            padding-bottom: 30px;
            background-image: url("{{ URL::asset('images/bg-footer.jpg')}}");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: #ffffff;
            box-shadow: 0 -2px 5px 0 rgba(0, 0, 0, 0.16), 0 -2px 10px 0 rgba(0, 0, 0, 0.12);
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

        #new-booking h2,
        #booking-details h2,
        #admin-login h2 {
            font-size: 40px;
            margin: 10px 0 10px 0;
        }

        #new-booking,
        #booking-details,
        #admin-login {
            padding: 20px;
            background-color: rgba(0, 0, 128, 0.9);
            text-align: center;
            color: #ffffff;
        }

        label {
            font-size: 15px;
        }

        #home {
            box-shadow: 2px 2px 3px #5f5f5f;
        }

        .btn {
            box-shadow: 2px 2px 3px #5f5f5f;
        }

        .form-control:hover {
            box-shadow: 0px 0px 5px 2px #ffff00;
        }

        .form-control:focus {
            box-shadow: 0px 0px 5px 2px #00ff00;
        }

        .btn:hover {
            box-shadow: 2px 2px 3px #5f5f5f;
            transform: scale(1.2, 1.2);
            -webkit-transform: scale(1.2, 1.2);
            -moz-transform: scale(1.2, 1.2);
        }

        #features,
        #advantages {
            position: relative;
            top: 15px;
        }

        #icon {
            width: 120px;
            height: 120px;
            position: relative;
            top: -60px;
        }

        #features h2,
        #advantages h2 {
            position: relative;
            top: -35px;
        }

        #features ul,
        #advantages ul {
            position: relative;
            top: -10px;
        }

        #adminLoginForm .input-group-prepend {
            width: 130px;
        }

        #booking-details .input-group-prepend {
            width: 180px;
        }

        .input-group-prepend i {
            margin: 0 auto;
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

        tr:hover a {
            color: #000000;
        }

        tr:hover a:hover {
            color: #0000ff;
        }

        #database h2 {
            font-size: 40px;
        }

        #database tbody {
            display: block;
            max-height: 250px;
            overflow-y: auto;
        }

        #database thead,
        #database tbody tr {
            display: table;
            width: 100%;
            table-layout: fixed;
        }

        #tests-list,
        #labs-list,
        #associations-list {
            margin: 10px;
            padding: 10px 20px 20px 20px;
            background-color: rgba(0, 0, 0, 0.7);
            text-align: center;
            color: #ffffff;
        }

        i:hover {
            transform: scale(1.2, 1.2);
            -webkit-transform: scale(1.2, 1.2);
            -moz-transform: scale(1.2, 1.2);
        }

        .glossy {
            border-radius: 25px 0 25px 0;
            background: #94c4fe;
            background-image: url("{{ URL::asset('images/bg.jpg')}}");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border: 1px solid #4864a9;
            text-shadow: 1px 1px 0px #5f5f5f;
            box-shadow: 2px 2px 5px 0 rgba(0, 0, 0, 0.16), 2px 2px 10px 0 rgba(0, 0, 0, 0.12);
            position: relative;
        }

        .glossy:before {
            content: "";
            display: block;
            position: absolute;
            left: 5px;
            background: url("{{ URL::asset('images/bg.jpg')}}");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    @yield('content')
    @if(!Session::get('admin'))
    <div class="modal fade" id="adminLogin" tabindex="-1" role="dialog" aria-labelledby="adminLoginLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="adminLoginLabel">Admin Login</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="admin_login" id="adminLoginForm">
                        @csrf
                        <div class="row justify-content-around">
                            <div class="col-11">
                                <div class="form-group row">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-white w-100 bg-primary"><i>Admin Name</i></span>
                                        </div>
                                        <input class="form-control" id="admin_name" name="admin_name" type="text" placeholder="Enter admin name here...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-11">
                                <div class="form-group row">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-white w-100 bg-primary"><i>Password</i></span>
                                        </div>
                                        <input class="form-control" id="password" name="password" type="password" placeholder="Enter password here...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-around">
                            <div class="w-50">
                                <button type="submit" class="form-control btn btn-success"><strong>Submit</strong></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
</body>
<script>
    $('.navbar-nav>li>a').on('click', function() {
        $('.navbar-collapse').collapse('hide');
    });
    $(document).click(function(event) {
        $('.navbar-collapse').collapse('hide');
    });
    $('textarea').on('keyup paste', function() {
        var text = $(this).val();
        $(this).val(text.trimLeft());
    });
</script>

</html>