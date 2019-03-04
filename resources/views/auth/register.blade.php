@extends('layouts.main')

@section('custom-styles')
    <link rel="stylesheet" href="css/index.css">
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

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
