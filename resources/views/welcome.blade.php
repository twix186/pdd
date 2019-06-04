@extends('layouts.boot')

@section('content')
    <div>
        @foreach($posts as $post)
            <div class="posts clearfix centered">
                <div style="padding:6px;">
                    <h3>{{$post->title}}</h3>
                    <hr>
                    <p>{{$post->text}}</p>
                    <div style="float:right;"><p>{{$post->date}}</p></div>
                </div>
            </div>
            <br>
        @endforeach
    </div>
@endsection
