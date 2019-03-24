@extends('layouts.main')

@section('custom-styles')
    <link rel="stylesheet" href="{{asset('css/profiles.creativities.show.css')}}">
@endsection

@section('content')
    <div class="container bg-white" id="mainContainer">
        <div class="container">
            <div class="container pt-0 m-0">
                <h4 class="text-center">Изглед на творбата:</h4>
                <div class="row">
                    
                    <div class="col-sm-12 col-md-4 offset-md-4">
                        <div class="card pt-0 m-0">
                            <img src="{{asset('storage/images/'.$creativity->image)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$creativity->title}}</h5>
                                <p class="card-text">{{$creativity->user->name}}: {{$creativity->description}}</p>
                                <a href="#" class="btn btn-primary">Редактирай</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
