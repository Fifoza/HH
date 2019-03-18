@extends('layouts.main')

@section('custom-styles')
<link rel="stylesheet" href="css/mission.css">
@endsection

@section('content')
<div class="container bg-white" id="mainContainer">
    <section id="centralHeader">
        <h2>Добре дошли в света на ръчно изработената красота</h2>
        <h3>Регистрирайте се и качете своите продукти</h3>
        <p>Всички продукти, които са качени тук, са изработени ръчно от участниците във тази платформа.</p>

        Ако сте клиент и търсите уникални ръчно изработени продукти, може да разгледате нашите предложения.
        Всеки творец отговаря за своите продукти.
        <a href="{{route('welcome')}}" class="btn btn-info" role="button">Върнете се в началото</a>
    </section>
</div>
@endsection

@section('custom-scripts')
    <script src="js/custom.js"></script>
@endsection