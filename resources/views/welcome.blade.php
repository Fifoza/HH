@extends('layouts.main')

@section('custom-styles')
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
                    <div class="row">

                        @foreach($users as $user)
                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem;">
                                <div class="img__wrapper"><img src="images/empty.jpeg" class="card-img-top"
                                        alt="..."><a class="sold_out text-white" style="font-size: 16px;">Продадено!</a></div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$user->creativities()->first()->title}}</h5>
                                    <h4>{{$user->name}}</h4>
                                    <p class="card-text">{{$user->creativities()->first()->description}}</p>

                                    <a href="#" class="btn btn-primary">Продължете</a>
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
                            <h5 class="card-title">Избирате Творчество</h5>
                            <p class="card-text">Потапяте се в пофилите на нашите творци и избирате уникалния
                                продукт.</p>
                            <a href="#" class="btn btn-primary">Продължете</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Избирате творец</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Продължете</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container p-3 pb-3">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card" style="width: 18rem;">
                            <div class="img__wrapper"><img src="images/empty.jpeg" class="card-img-top"
                                    alt="..."><a class="sold_out text-white" style="font-size: 16px;">Продадено!</a></div>
                            <div class="card-body">
                                <h5 class="card-title">Мандала - Квилинг</h5>
                                <h4>Ива Миланова</h4>
                                <p class="card-text">Изработена от 5мм ленти, лепило, картон, рамка - по-желание.</p>

                                <a href="#" class="btn btn-primary">Продължете</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card" style="width: 18rem;">
                            <img src="images/empty.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card" style="width: 18rem;">
                            <img src="images/empty.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <div class="col">
                        <div class="card mt-3" style="width: 100%;">
                            <div class="img__wrapper"><img src="images/IMG_20181005_085629.jpg" class="card-img-top"
                                    alt="..."><a class="sold_out text-white" style="font-size: 16px;">Продадено!</a></div>
                            <div class="card-body">
                                <h5 class="card-title">Мандала - Квилинг</h5>
                                <h4>Ива Миланова</h4>
                                <p class="card-text">Изработена от 5мм ленти, лепило, картон, рамка - по-желание.</p>

                                <a href="#" class="btn btn-primary">Продължете</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mt-3" style="width: 100%;">
                            <div class="img__wrapper"><img src="images/IMG_20181005_085629.jpg" class="card-img-top"
                                    alt="..."><a class="sold_out text-white" style="font-size: 16px;">Продадено!</a></div>
                            <div class="card-body">
                                <h5 class="card-title">Мандала - Квилинг</h5>
                                <h4>Ива Миланова</h4>
                                <p class="card-text">Изработена от 5мм ленти, лепило, картон, рамка - по-желание.</p>

                                <a href="#" class="btn btn-primary">Продължете</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mt-3" style="width: 100%;">
                            <div class="img__wrapper"><img src="images/IMG_20181005_085629.jpg" class="card-img-top"
                                    alt="..."><a class="sold_out text-white" style="font-size: 16px;">Продадено!</a></div>
                            <div class="card-body">
                                <h5 class="card-title">Мандала - Квилинг</h5>
                                <h4>Ива Миланова</h4>
                                <p class="card-text">Изработена от 5мм ленти, лепило, картон, рамка - по-желание.</p>

                                <a href="#" class="btn btn-primary">Продължете</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container bg-transparent" id="gallery">

            <h4>Последните творби от нашите членове</h4>

            <hr class="mt-2 mb-5">

            <div class="row text-center text-lg-left">

                <!---->
                <div class="col-lg-3 col-md-4 col-6">

                </div>
                <div class="col-lg-3 col-md-4 col-6">

                </div>
                <div class="col-lg-3 col-md-4 col-6">

                </div>
                <div class="col-lg-3 col-md-4 col-6">

                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="images/empty.jpeg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="images/empty.jpeg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="images/empty.jpeg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="images/empty.jpeg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/8mUEy0ABdNE/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/G9Rfc1qccH4/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aJeH0KcFkuc/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/p2TQ-3Bh3Oo/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/8mUEy0ABdNE/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/G9Rfc1qccH4/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aJeH0KcFkuc/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/p2TQ-3Bh3Oo/400x300" alt="">
                    </a>
                </div>
            </div>
        </div>
@endsection

@section('custom-scripts')
    <script src="js/custom.js"></script>
@endsection