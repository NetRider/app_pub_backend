<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--
  		<title>@yield('title')</title>
        <link rel="stylesheet" href="{{secure_asset('css/app.css')}}">
        <link rel="stylesheet" href="{{secure_asset('bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{secure_asset('bootstrap/css/bootstrap-theme.css')}}">
        <link rel="stylesheet" href="{{secure_asset('css/mycss.css')}}">
        <link rel="stylesheet" href="{{secure_asset('datetimepicker/css/bootstrap-datetimepicker.min.css')}}"/>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <script type="text/javascript" src="{{ secure_asset('js/jquery/jquery-1.8.3.min.js')}}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{ secure_asset('moment/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{ secure_asset('moment/locales/it.js')}}"></script>
        <script type="text/javascript" src="{{ secure_asset('bootstrap/js/bootstrap.min.js')}}"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{ secure_asset('datetimepicker/js/bootstrap-datetimepicker.min.js')}}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{ secure_asset('validator/dist/jquery.validate.js')}}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{ secure_asset('js/eventoValidator.js')}}" charset="UTF-8"></script>
-->

  		<title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/mycss.css')}}">
        <link rel="stylesheet" href="{{asset('datetimepicker/css/bootstrap-datetimepicker.min.css')}}"/>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <script type="text/javascript" src="{{ asset('js/jquery/jquery-1.8.3.min.js')}}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{ asset('moment/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('moment/locales/it.js')}}"></script>
        <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{ asset('datetimepicker/js/bootstrap-datetimepicker.min.js')}}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{ asset('js/jquery-sortable-min.js')}}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{ asset('validator/dist/jquery.validate.js')}}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{ asset('js/eventoValidator.js')}}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{ asset('js/categoriaValidator.js')}}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{ asset('js/piattoValidator.js')}}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{ asset('js/sortPiatti.js')}}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{ asset('js/sortCategorie.js')}}" charset="UTF-8"></script>

    </head>
    <body class="main">
        <div class="flex-center position-ref full-height">
            <div class='container-fluid'>
				@yield('content')
            </div>
        </div>
    </body>
</html>
