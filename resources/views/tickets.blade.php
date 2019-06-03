@extends('layouts.boot')

@section('content')
    <h2 style="text-align: center" class="h1">Тест по билетам ПДД</h2>
    <div id="jQuizler" class="main-quiz-holder" style="{{ URL::asset('css/jQuizler.css')}}">
        <h3>Билет №1</h3>
        <button class="btn btn-large">Начать</button>
    </div>
@endsection
@section('css')

    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/jQuizler.css" />

@endsection