@extends('layouts.main')

@section('custom-styles')
<link rel="stylesheet" href="{{URL::asset('css/profiles.show.css')}}">
@endsection

@section('content')
<div class="container bg-white" id="mainContainer">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 mt-3">
                <a href="#" class="btn btn-success btn-block">Качи нова творба</a>
            </div>
            <div class="col-12">
                <h2>Текущите Ви творби:</h2>
            </div>
            <div class="col-sm-4 mt-5">
                <div class="card">
                    <div class="img__wrapper">
                        <img src="{{URL::asset('images/IMG_20181005_085629.jpg')}}" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">заглавието на продукта тук</h5>
                        <h4>Името на който го е направил(нередактируемо от потрбителя)</h4>
                        <p class="card-text">Описание на творбата...хабала бабала хабала баба ла хабала бабала хабала бабалах абала бабала хабала бабал</p>

                        <a href="#" class="btn btn-primary btn-sm">Редактирай</a>
                        <a href="#" class="btn btn-danger btn-sm">Изтрий</a>

                        <div class="star-rating">
                            <span class="fa fa-star-o" data-rating="1"></span>
                            <span class="fa fa-star-o" data-rating="2"></span>
                            <span class="fa fa-star-o" data-rating="3"></span>
                            <span class="fa fa-star-o" data-rating="4"></span>
                            <span class="fa fa-star-o" data-rating="5"></span>
                            <input type="hidden" name="whatever1" class="rating-value" value="5">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-5">
                <div class="card">
                    <div class="img__wrapper">
                        <img src="{{URL::asset('images/IMG_20181005_085629.jpg')}}" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">заглавието на продукта тук</h5>
                        <h4>Името на който го е направил(нередактируемо от потрбителя)</h4>
                        <p class="card-text">Описание на творбата...хабала бабала хабала баба ла хабала бабала хабала бабалах абала бабала хабала бабал</p>

                        <a href="#" class="btn btn-primary btn-sm">Редактирай</a>
                        <a href="#" class="btn btn-danger btn-sm">Изтрий</a>

                        <div class="star-rating">
                            <span class="fa fa-star-o" data-rating="1"></span>
                            <span class="fa fa-star-o" data-rating="2"></span>
                            <span class="fa fa-star-o" data-rating="3"></span>
                            <span class="fa fa-star-o" data-rating="4"></span>
                            <span class="fa fa-star-o" data-rating="5"></span>
                            <input type="hidden" name="whatever1" class="rating-value" value="5">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-5">
                <div class="card">
                    <div class="img__wrapper">
                        <img src="{{URL::asset('images/IMG_20181005_085629.jpg')}}" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">заглавието на продукта тук</h5>
                        <h4>Името на който го е направил(нередактируемо от потрбителя)</h4>
                        <p class="card-text">Описание на творбата...хабала бабала хабала баба ла хабала бабала хабала бабалах абала бабала хабала бабал</p>

                        <a href="#" class="btn btn-primary btn-sm">Редактирай</a>
                        <a href="#" class="btn btn-danger btn-sm">Изтрий</a>

                        <div class="star-rating">
                            <span class="fa fa-star-o" data-rating="1"></span>
                            <span class="fa fa-star-o" data-rating="2"></span>
                            <span class="fa fa-star-o" data-rating="3"></span>
                            <span class="fa fa-star-o" data-rating="4"></span>
                            <span class="fa fa-star-o" data-rating="5"></span>
                            <input type="hidden" name="whatever1" class="rating-value" value="5">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-5">
                <div class="card">
                    <div class="img__wrapper">
                        <img src="{{URL::asset('images/IMG_20181005_085629.jpg')}}" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">заглавието на продукта тук</h5>
                        <h4>Името на който го е направил(нередактируемо от потрбителя)</h4>
                        <p class="card-text">Описание на творбата...хабала бабала хабала баба ла хабала бабала хабала бабалах абала бабала хабала бабал</p>

                        <a href="#" class="btn btn-primary btn-sm">Редактирай</a>
                        <a href="#" class="btn btn-danger btn-sm">Изтрий</a>

                        <div class="star-rating">
                            <span class="fa fa-star-o" data-rating="1"></span>
                            <span class="fa fa-star-o" data-rating="2"></span>
                            <span class="fa fa-star-o" data-rating="3"></span>
                            <span class="fa fa-star-o" data-rating="4"></span>
                            <span class="fa fa-star-o" data-rating="5"></span>
                            <input type="hidden" name="whatever1" class="rating-value" value="5">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-5">
                <div class="card">
                    <div class="img__wrapper">
                        <img src="{{URL::asset('images/IMG_20181005_085629.jpg')}}" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">заглавието на продукта тук</h5>
                        <h4>Името на който го е направил(нередактируемо от потрбителя)</h4>
                        <p class="card-text">Описание на творбата...хабала бабала хабала баба ла хабала бабала хабала бабалах абала бабала хабала бабал</p>

                        <a href="#" class="btn btn-primary btn-sm">Редактирай</a>
                        <a href="#" class="btn btn-danger btn-sm">Изтрий</a>

                        <div class="star-rating">
                            <span class="fa fa-star-o" data-rating="1"></span>
                            <span class="fa fa-star-o" data-rating="2"></span>
                            <span class="fa fa-star-o" data-rating="3"></span>
                            <span class="fa fa-star-o" data-rating="4"></span>
                            <span class="fa fa-star-o" data-rating="5"></span>
                            <input type="hidden" name="whatever1" class="rating-value" value="5">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-5">
                <div class="card">
                    <div class="img__wrapper">
                        <img src="{{URL::asset('images/IMG_20181005_085629.jpg')}}" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">заглавието на продукта тук</h5>
                        <h4>Името на който го е направил(нередактируемо от потрбителя)</h4>
                        <p class="card-text">Описание на творбата...хабала бабала хабала баба ла хабала бабала хабала бабалах абала бабала хабала бабал</p>

                        <a href="#" class="btn btn-primary btn-sm">Редактирай</a>
                        <a href="#" class="btn btn-danger btn-sm">Изтрий</a>

                        <div class="star-rating">
                            <span class="fa fa-star-o" data-rating="1"></span>
                            <span class="fa fa-star-o" data-rating="2"></span>
                            <span class="fa fa-star-o" data-rating="3"></span>
                            <span class="fa fa-star-o" data-rating="4"></span>
                            <span class="fa fa-star-o" data-rating="5"></span>
                            <input type="hidden" name="whatever1" class="rating-value" value="5">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-5">
                <div class="card">
                    <div class="img__wrapper">
                        <img src="{{URL::asset('images/IMG_20181005_085629.jpg')}}" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">заглавието на продукта тук</h5>
                        <h4>Името на който го е направил(нередактируемо от потрбителя)</h4>
                        <p class="card-text">Описание на творбата...хабала бабала хабала баба ла хабала бабала хабала бабалах абала бабала хабала бабал</p>

                        <a href="#" class="btn btn-primary btn-sm">Редактирай</a>
                        <a href="#" class="btn btn-danger btn-sm">Изтрий</a>

                        <div class="star-rating">
                            <span class="fa fa-star-o" data-rating="1"></span>
                            <span class="fa fa-star-o" data-rating="2"></span>
                            <span class="fa fa-star-o" data-rating="3"></span>
                            <span class="fa fa-star-o" data-rating="4"></span>
                            <span class="fa fa-star-o" data-rating="5"></span>
                            <input type="hidden" name="whatever1" class="rating-value" value="5">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-5">
                <div class="card">
                    <div class="img__wrapper">
                        <img src="{{URL::asset('images/IMG_20181005_085629.jpg')}}" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">заглавието на продукта тук</h5>
                        <h4>Името на който го е направил(нередактируемо от потрбителя)</h4>
                        <p class="card-text">Описание на творбата...хабала бабала хабала баба ла хабала бабала хабала бабалах абала бабала хабала бабал</p>

                        <a href="#" class="btn btn-primary btn-sm">Редактирай</a>
                        <a href="#" class="btn btn-danger btn-sm">Изтрий</a>

                        <div class="star-rating">
                            <span class="fa fa-star-o" data-rating="1"></span>
                            <span class="fa fa-star-o" data-rating="2"></span>
                            <span class="fa fa-star-o" data-rating="3"></span>
                            <span class="fa fa-star-o" data-rating="4"></span>
                            <span class="fa fa-star-o" data-rating="5"></span>
                            <input type="hidden" name="whatever1" class="rating-value" value="5">
                        </div>

                    </div>
                </div>
            </div>
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