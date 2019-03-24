@extends('layouts.main')

@section('custom-styles')
<link rel="stylesheet" href="css/welcome.css">
@endsection

@section('content')
    <div class="container bg-white" id="mainContainer">

            <section id="centralHeader">
                <h2>Добре дошли в света на ръчно изработената красота</h2>
                <h3>Регистрирайте се и качете своите продукти</h3>
                <p>Всички продукти, които са качени тук, са изработени ръчно от участниците във тази платформа.</p>

                Ако сте клиент и търсите уникални ръчно изработени продукти, може да разгледате нашите предложения.
                Всеки творец отговаря за своите продукти.
            </section>

            <div class="container">

                <div class="container p-3">
                    <hr>
                    <h4 class="text-left">Най-новите творби:</h4>
                    <div class="row">

                        @foreach($lastCreativities as $lastCreativity)
                        <div class="col-sm-4">
                            <div class="card">
                                <h6>Категория: {{$lastCreativity->type}}</h6>
                                <img src="{{asset('storage/images/'.$lastCreativity->image)}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$lastCreativity->title}}</h5>
                                    <p class="card-text">{{$lastCreativity->user->name}}: {{$lastCreativity->description}}</p>
                                    <a href="#" class="btn btn-primary">See more about that</a>
                                    <div class="star-rating">
                                        <span class="fa fa-star {{$lastCreativity->rate > 0 ? '' : 'fa-star-no'}}"></span>
                                        <span class="fa fa-star {{$lastCreativity->rate > 1 ? '' : 'fa-star-no'}}"></span>
                                        <span class="fa fa-star {{$lastCreativity->rate > 2 ? '' : 'fa-star-no'}}"></span>
                                        <span class="fa fa-star {{$lastCreativity->rate > 3 ? '' : 'fa-star-no'}}"></span>
                                        <span class="fa fa-star {{$lastCreativity->rate > 4 ? '' : 'fa-star-no'}}"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="row mt-5" id="middleContainer">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Избирате Творчества</h5>
                            <p class="card-text">Насладете се на уникални творения и се свържете със създателят им.</p>
                            <a href="#" class="btn btn-primary">Покажи творчества</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Избирате творец</h5>
                            <p class="card-text">Потапяте се в пофилите на нашите творци и избирате уникалния
                                продукт.</p>
                            <a href="#" class="btn btn-primary">Покажи творец</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container p-3 pb-3">
                <h4 class="text-left">Най-добре оценените творби:</h4>

                <hr>
                <div class="row">
                    
                    @foreach($topRatedCreativities as $topCreativity)
                    <div class="col-sm-4">
                        <div class="card">
                            <h6>Категория: {{$lastCreativity->type}}</h6>
                            <img src="{{asset('storage/images/'.$topCreativity->image)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$topCreativity->title}}</h5>
                                <p class="card-text">{{$topCreativity->user->name}}: {{$topCreativity->description}}</p>
                                <a href="#" class="btn btn-primary">See more about that</a>
                                <div class="star-rating">
                                    <span class="fa fa-star {{$topCreativity->rate > 0 ? '' : 'fa-star-no'}}"></span>
                                    <span class="fa fa-star {{$topCreativity->rate > 1 ? '' : 'fa-star-no'}}"></span>
                                    <span class="fa fa-star {{$topCreativity->rate > 2 ? '' : 'fa-star-no'}}"></span>
                                    <span class="fa fa-star {{$topCreativity->rate > 3 ? '' : 'fa-star-no'}}"></span>
                                    <span class="fa fa-star {{$topCreativity->rate > 4 ? '' : 'fa-star-no'}}"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>



        <!--Container for Mobile-->
        <div clas="jumbotron" id="mobilContainer">
            <section class="container bg-white">
                <h2>Добре дошли в света на ръчно изработената красота</h2>
                <h3>Регистрирайте се и качете своите продукти</h3>
                <p>Всички продукти, които са качени тук, са изработени ръчно от участниците във тази платформа.</p>

                Ако сте клиент и търсите уникални ръчно изработени продукти, може да разгледате нашите предложения.
                Всеки творец отговаря за своите продукти.
            </section>
            <div class="container">
                <div class="row">
                    <hr>
                    <h4 class="text-left">Най-новите творби:</h4>

                    @foreach($lastCreativities as $lastCreativity)
                    <div class="col-12">
                        <div class="card mt-3" style="width: 100%;">
                            <div class="img__wrapper">
                                <img src="{{asset('storage/images/'.$lastCreativity->image)}}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$lastCreativity->title}}</h5>
                                <h4>{{$lastCreativity->user->name}}:</h4>
                                <p class="card-text">{{$lastCreativity->description}}</p>

                                <a href="#" class="btn btn-primary">Виж повече за това</a>
                                <div class="star-rating">
                                    <span class="fa fa-star {{$lastCreativity->rate > 0 ? '' : 'fa-star-no'}}"></span>
                                    <span class="fa fa-star {{$lastCreativity->rate > 1 ? '' : 'fa-star-no'}}"></span>
                                    <span class="fa fa-star {{$lastCreativity->rate > 2 ? '' : 'fa-star-no'}}"></span>
                                    <span class="fa fa-star {{$lastCreativity->rate > 3 ? '' : 'fa-star-no'}}"></span>
                                    <span class="fa fa-star {{$lastCreativity->rate > 4 ? '' : 'fa-star-no'}}"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div><!-- container for mobile end -->

        <div class="container bg-transparent" id="gallery">
        
            <h4>"Букет" от произволно избрани творби:</h4>
        
            <hr class="mt-2 mb-5">
        
            <div class="row text-center text-lg-left">
             
                @foreach($randomCreativities as $randomCreativity)
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{asset('storage/images/'.$randomCreativity->image)}}" alt="">
                    </a>
                </div>
                @endforeach

            </div>
        </div>
@endsection

@section('custom-scripts')
    <script src="js/custom.js"></script>
@endsection