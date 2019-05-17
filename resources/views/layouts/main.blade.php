<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">

    <title>Creativni.com</title>

    <!-- ако закоментираш този линк навигацията, футъра и хедъра ще са си пак тип топ. Изобщо не ни е нужен. Ти като си разработваш, ползвай си го ако ти е по-лесно с него -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ URL::asset('css/mi.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main/index.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main/nav.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main/header.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main/footer.css') }}">
    <!--Custom CSS-->
    @yield('custom-styles')

</head>

<body>

    <div class="mi-layout">

        @include('layouts._nav')

        @include('layouts._header')

        <main class="mi-main">
            @yield('content')
        </main>

        @include('layouts._footer')

    </div>

    <!-- тези скриптове също ще отпаднат в последствие. Задръж ги засега да ти помагат. Ако се чудиш дали всички ще ги разкараме: Да :) -->
    <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    @yield('custom-scripts')

</body>

</html>