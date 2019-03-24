@extends('layouts.main')

@section('custom-styles')
<link rel="stylesheet" href="{{URL::asset('css/profiles.show.css')}}">
@endsection

@section('content')
<div class="container bg-white" id="mainContainer">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 mt-3">
                <a href="{{route('profiles.creativities.create', ['profile' => auth()->id()])}}" class="btn btn-success btn-block">Качи нова творба</a>
            </div>
            <div class="col-12">
                @if($profile->creativities->count())<h2>Текущите Ви творби:</h2>@endif
            </div>
            
            @foreach($profile->creativities as $creativity)
            <div class="col-sm-4 mt-5">
                <div class="card">
                    <h5>Категория: {{$creativity->type}}</h5>
                    <div class="img__wrapper">
                        <img src="{{asset('storage/images/'.$creativity->image)}}" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$creativity->title}}</h5>
                        <h4>{{$profile->name}}</h4>
                        <p class="card-text">{{$creativity->description}}</p>

                        <a href="#" class="btn btn-primary btn-sm">Редактирай</a>
                        <a href="#" class="btn btn-danger btn-sm">Изтрий</a>

                        <div class="star-rating">
                            <span class="far fa-star {{$creativity->rate > 0 ? '' : 'fa-star-no'}}"></span>
                            <span class="far fa-star {{$creativity->rate > 1 ? '' : 'fa-star-no'}}"></span>
                            <span class="far fa-star {{$creativity->rate > 2 ? '' : 'fa-star-no'}}"></span>
                            <span class="far fa-star {{$creativity->rate > 3 ? '' : 'fa-star-no'}}"></span>
                            <span class="far fa-star {{$creativity->rate > 4 ? '' : 'fa-star-no'}}"></span>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection

@section('custom-scripts')
    <script src="js/custom.js"></script>
    <script>
    var $star_rating = $('.star-rating .fa');

    var SetRatingStar = function() {
      return $star_rating.each(function() {
        if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
          return $(this).removeClass('fa-star-o').addClass('fa-star');
        } else {
          return $(this).removeClass('fa-star').addClass('fa-star-o');
        }
      });
    };

    $star_rating.on('click', function() {
      $star_rating.siblings('input.rating-value').val($(this).data('rating'));
      return SetRatingStar();
    });

    SetRatingStar();
    $(document).ready(function() {

    });
    </script>
@endsection