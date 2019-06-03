@extends('layouts.boot')

@section('content')
    <h3 class="page-title">@lang('Экзамен')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['tests.store']]) !!}
    @if (Auth::guest())
        <span>Что бы пройти тестирование нужно <a href="{{url('login')}}">авторизоваться</a></span>
    @else
    <div class="panel panel-default">

        @if(count($questions) > 0)
            <div class="panel-body">
                <?php $i = 1; ?>
                @foreach($questions as $question)
                    @if ($i > 1) <hr /> @endif
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <div class="form-group">
                                <strong>Вопрос №{{ $i }}<br><img src='{{ $question->picture }}'><br />{!! nl2br($question->text) !!}</strong>
                                <input
                                        type="hidden"
                                        name="questions[{{ $i }}]"
                                        value="{{ $question->id }}">
                                <br>
                                @foreach($question->options as $option)
                                    <br>
                                    <label class="radio-inline">
                                        <input
                                                type="radio"
                                                name="answers[{{ $question->id }}]"
                                                value="{{ $option->id }}">
                                        {{ $option->text }}
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                @endforeach
            </div>
        @endif

    </div>

    {!! Form::submit(trans('Проверить'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    @endif
@stop

@section('javascript')
    @parent
    <script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
    <script>
        $('.datetime').datetimepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}",
            timeFormat: "hh:mm:ss"
        });
    </script>

@stop
