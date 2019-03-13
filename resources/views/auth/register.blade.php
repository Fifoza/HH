@extends('layouts.main')

@section('custom-styles')
    <link rel="stylesheet" href="css/register.css">
@endsection

@section('content')
<div class="container" id="registerForm">

    <div class="container" id="mailForm">

        <h3>Регистриране на потребител</h3>
        <hr>
        </a>
        <form method="POST" action="{{ route('register') }}">
                
            @csrf

            <div class="col">
                <div class="form-group">
                    <label for="FirstName">Име и Фамилия</label>
                    <input name="name" type="text" class="form-control" placeholder="First and Last Name">

                    <label for="LastName">Псевдоним</label>
                    <input name="nickname" type="text" class="form-control" placeholder="Nickname">

                    <label for="inputEmail4">Email</label>
                    <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    <hr>

                    <label for="inputPassword4">Парола</label>
                    <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">

                    <label for="psw-repeat">Повторете паролата</label>
                    <input name="password_confirmation" type="password" class="form-control" placeholder="Repeat Password">
                </div>

                <p>Създавайки акаунт в този сайт Вие се съгласявате с <a href="#">Условията и Правилата</a>.
                </p>

            </div>
            <hr>
            <div class="form-group">
                <div class="form-check">
                    <input name="agree" class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">Прочетох и приех общите условия</label>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Изпрати</button>
        </form>
    </div>
</div>
@endsection
