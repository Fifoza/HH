@extends('layouts.main')

@section('custom-styles')
    <link rel="stylesheet" href="{{asset('css/profiles.creativities.create.css')}}">
@endsection

@section('content')
<div class="container" id="registerForm">

    <div class="container" id="mailForm">

        <h3>Публикуване на творчество:</h3>
        <hr>
        </a>
        <form method="POST" action="{{ route('profiles.creativities.store', ['profile' => auth()->id()]) }}" enctype="multipart/form-data">

            @csrf

            <div class="col-12 col-md-8 offset-md-2">
                <div class="form-group">

                    <label for="title">Заглавие</label>
                    <input name="title" type="text" class="form-control" placeholder="Заглавие на творението..." value="{{ old('title') }}" required>
                    @if($errors->has('title'))
                    <span class="text-danger">{{$errors->first('title')}}</span></br>
                    @endif

                    <label for="description">Описание</label>
                    <input name="description" type="text" class="form-control" placeholder="Описание на творението..." value="{{ old('description') }}" required>
                    @if($errors->has('description'))
                    <span class="text-danger">{{$errors->first('description')}}</span></br>
                    @endif

                    <select name="type" id="type" class="form-control">
                        <option value="" disabled selected="selected">--Задай категория--</option>
                        <option value="Квилинг">Квилинг</option>
                        <option value="Плетени на една кука">Плетени на една кука</option>
                        <option value="Плетени на две куки">Плетени на две куки</option>
                        <option value="Живопис">Живопис</option>
                        <option value="Декупаж">Декупаж</option>
                        <option value="Щамповани">Щамповани</option>
                        <option value="Дигитални">Дигитални</option>
                        <option value="Други">Други</option>
                    </select>

                    <label for="image">Изображение на творчеството</label>
                    <input name="image" type="file" id="image" required>
                    @if($errors->has('image'))
                    <span class="text-danger">{{$errors->first('image')}}</span></br>
                    @endif

                </div>

                <button type="submit" class="btn btn-success" name="submit">Публикувай</button>
            </div>

        </form>
    </div>
</div>
@endsection
