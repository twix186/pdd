@extends('layouts.boot')

@section('content')
    <h2 style="text-align: center" class="h1">Онлайн экзамен ПДД 2019: категории A и B</h2>
    <div id="jQuizler" class="main-quiz-holder">
        <h3>Экзамен</h3>
        <button class="btn btn-large">Начать</button>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/jQuizler.css" />
@endsection