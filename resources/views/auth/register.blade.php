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
                    <label for="name">Име или Псевдоним</label>
                    <input name="name" type="text" class="form-control" placeholder="Име или Псевдоним" value="{{ old('name') }}">
                    @if($errors->has('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span></br>
                    @endif

                    <label for="inputEmail4">Имейл</label>
                    <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Имейл" value="{{ old('email') }}">
                    @if($errors->has('email'))
                    <span class="text-danger">{{$errors->first('email')}}</span></br>
                    @endif
                    <hr>

                    <label for="inputPassword4">Парола</label>
                    <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Парола">
                    @if($errors->has('password'))
                    <span class="text-danger">{{$errors->first('password')}}</span></br>
                    @endif

                    <label for="psw-repeat">Повторете паролата</label>
                    <input name="password_confirmation" type="password" class="form-control" placeholder="Повторете паролата">
                    @if($errors->has('password_confirmation'))
                    <span class="text-danger">{{$errors->first('password_confirmation')}}</span></br>
                    @endif
                </div>

                <p>Създавайки акаунт в този сайт Вие се съгласявате с <a href="#">Условията и Правилата</a>.
                </p>

            </div>
            <hr>
            <div class="form-group">
                <div class="form-check">
                    <input name="agree" class="form-check-input" type="checkbox" id="gridCheck" value="yes" @if (old('agree') !== null) checked @endif>
                    <label class="form-check-label" for="gridCheck">Прочетох и приех общите условия</label>
                    @if($errors->has('agree'))
                    <span class="text-danger">{{$errors->first('agree')}}</span></br>
                    @endif
                </div>
            </div>

            <button type="submit" class="btn btn-success" name="submit">Регистрирай се</button>
        </form>
    </div>
</div>
@endsection
