<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

  		<title>@yield('title')</title>

  		<link rel="stylesheet" href="{{secure_asset('css/app.css')}}">
        <link rel="stylesheet" href="{{secure_asset('bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{secure_asset('bootstrap/css/bootstrap-theme.css')}}">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <script type="text/javascript" src="{{ URL::asset('js/jquery/jquery-1.8.3.min.js')}}" charset="UTF-8"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{ URL::asset('validator/dist/jquery.validate.js')}}"
                charset="UTF-8"></script>
        <link rel="stylesheet" href="{{secure_asset('css/mycss.css')}}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class='container-fluid'>
				@yield('content')
            </div>
        </div>
    </body>
</html>
