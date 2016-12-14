<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
        {{--@if (Route::has('login'))--}}
            <!-- Authentication Links -->
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<span class="caret"></span> </a>
                    <ul id="login-dp" class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-md-12 judul">
                                    Masukkan Email dan Password
                                    <form class="form" method="post" role="form" action="{{url('/login')}}" accept-charset="UTF-8" id="login-nav">
                                        {{ csrf_field() }}
                                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" style="color:black; ">Email</label>
                                            <input type="email"  name="email" class="form-control" placeholder="Email" style="color:black; font-weight: bold" required>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password"  style="color:black; ">Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="password" style="color:black; font-weight: bold" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block tombol">Login</button>

                                        </div>
                                        <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                            Forgot Your Password?
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ url('/register') }}">Register</a></li>

        </ul>


    {{--@endif--}}
    </div>
</nav>



    <div class="content">
        <div class="title m-b-md name">
            Tweet
        </div>

        {{--<div class="links">--}}
        {{--<a href="https://laravel.com/docs">Documentation</a>--}}
        {{--<a href="https://laracasts.com">Laracasts</a>--}}
        {{--<a href="https://laravel-news.com">News</a>--}}
        {{--<a href="https://forge.laravel.com">Forge</a>--}}
        {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
        {{--</div>--}}
    </div>
</div>
</body>
</html>
