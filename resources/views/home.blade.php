@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Здравствуйте, {{ Auth::user()->name }}</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
