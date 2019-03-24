@extends('layouts.main')

@section('custom-styles')
    <link rel="stylesheet" href="css/profiles.creativities.create.css">
@endsection

@section('content')
<div class="container" id="registerForm">

    <div class="container" id="mailForm">

        <h3>Публикуване на творчество:</h3>
        <hr>
        </a>
        <form method="POST" action="{{ route('profiles.creativities.store', ['profile' => auth()->id()]) }}" enctype="multipart/form-data">

            @csrf

            <div class="col">
                <div class="form-group">

                    <label for="title"></label>
                    <input name="title" type="text" class="form-control" placeholder="Заглавие на творението..." value="{{ old('title') }}" required>
                    @if($errors->has('title'))
                    <span class="text-danger">{{$errors->first('title')}}</span></br>
                    @endif

                    <label for="description"></label>
                    <input name="description" type="text" class="form-control" placeholder="Описание на творението..." value="{{ old('description') }}" required>
                    @if($errors->has('description'))
                    <span class="text-danger">{{$errors->first('description')}}</span></br>
                    @endif

                    <label for="image">Изображение на творчеството</label>
                    <input name="image" type="file" id="image" required>
                    @if($errors->has('image'))
                    <span class="text-danger">{{$errors->first('image')}}</span></br>
                    @endif

                </div>

            </div>

            <button type="submit" class="btn btn-success" name="submit">Публикувай</button>
        </form>
    </div>
</div>
@endsection
