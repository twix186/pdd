@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.results.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.view-result')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        @if(Auth::user()->isAdmin())
                        <tr>
                            <th>@lang('quickadmin.results.fields.user')</th>
                            <td>{{ $test->user->name }}</td>
                        </tr>
                        @endif
                        <tr>
                            <th>@lang('quickadmin.results.fields.date')</th>
                            <td>{{ $test->created_at }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.results.fields.result')</th>
                            <td>{{ $test->result }}/10</td>
                        </tr>
                    </table>
                <?php $i = 1 ?>
                @foreach($results as $result)
                    <table class="table table-bordered table-striped">
                        <tr class="test-option{{ $result->is_correct ? '-true' : '-false' }}">
                            <th style="width: 10%">Вопрос #{{ $i }}</th>
                            <th>{{ $result->question->text }}</th>
                        </tr>

                        <tr>
                            <td>Варианты</td>
                            <td>
                                <ul>
                                @foreach($result->question->options as $option)
                                    <li style="@if ($option->correct == 1) font-weight: bold; @endif
                                        @if ($result->option_id == $option->id) text-decoration: underline @endif">{{ $option->text }}
                                        @if ($option->is_correct == 1) <em>(правильный ответ)</em> @endif
                                        @if ($result->option_id == $option->id) <em>(ваш ответ)</em> @endif
                                    </li>
                                @endforeach
                                </ul>
                            </td>
                        </tr>
                    </table>
                <?php $i++ ?>
                @endforeach
                </div>
            </div>

            <p>&nbsp;</p>
            <a href="{{ route('results.index') }}" class="btn btn-default">Все результаты</a>
        </div>
    </div>
@stop
