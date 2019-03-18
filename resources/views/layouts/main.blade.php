<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta name="theme-color" content="#222222">

    <title>Fifoza Test Website</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-reboot.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <script async type="text/javascript" src="{{ URL::asset('bubles/bubble-bg-master/background.js') }}"></script>
    <link rel="stylesheet" href="../Fifoza Test Website/LoginForm/LoginRegistrationForm/css/animate-custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">

    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">

    @yield('custom-styles')

</head>

<body>

    @include('layouts._header')

    <main id="main">
        
        @include('layouts._nav')

        @yield('content')
        
        @include('layouts._footer')

    </main>

    <script src="{{ URL::asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    @yield('custom-scripts')
</body>


</html>