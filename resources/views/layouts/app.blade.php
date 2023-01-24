<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IC Food - @yield('title')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins');
        *{
            font-family: 'Poppins', sans-serif;
        }
        .ic{
            color: #E4283E;
        }
        .food{
            color: #EF7B3A;
        }
        #fgtpass{
            float: right;
            padding-right: 0;
            padding-top: 0;
            text-decoration: none;
        }
        #sub{
            background-color: black;
        }
        #email{
            border-width: 2px;
            border-color: black;
        }
        #password{
            border-width: 2px;
            border-color: black;
        }
        #firstname{
            border-width: 2px;
            border-color: black;
        }
        #lastname{
            border-width: 2px;
            border-color: black;
        }
        #password-confirm{
            border-width: 2px;
            border-color: black;
        }
        .regs{
            color: #FF843F;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body>
    @yield('navbar')
    @yield('content')
</body>
</html>
