@extends('layouts.main')

@section('custom-styles')
    <link rel="stylesheet" href="css/login.css">
@endsection
@section('content')
    <div class="container bg-info mt-5 p-4" id="loginForm">
        <h2>Влезте в акаунта си</h2>
        <form class="form-horizontal" action="{{route('login')}}"" method="POST">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Имейл:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Въведете имейл" name="email" value="{{old('email')}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Парола:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pwd" placeholder="Въведете парола" name="password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>Запомни ме</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Изпрати</button>
                </div>
            </div>
        </form>
    </div>
@endsection
