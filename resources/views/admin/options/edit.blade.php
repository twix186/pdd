@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.options.title')</h3>
    
    {!! Form::model($option, ['method' => 'PUT', 'route' => ['admin.options.update', $option->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('text', trans('quickadmin.options.fields.text').'', ['class' => 'control-label']) !!}
                    {!! Form::text('text', old('text'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('text'))
                        <p class="help-block">
                            {{ $errors->first('text') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('is_correct', trans('quickadmin.options.fields.is-correct').'', ['class' => 'control-label']) !!}
                    {!! Form::number('is_correct', old('is_correct'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('is_correct'))
                        <p class="help-block">
                            {{ $errors->first('is_correct') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('question_id', trans('quickadmin.options.fields.question-id').'', ['class' => 'control-label']) !!}
                    {!! Form::number('question_id', old('question_id'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('question_id'))
                        <p class="help-block">
                            {{ $errors->first('question_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

