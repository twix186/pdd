@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.options.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.options.fields.text')</th>
                            <td field-key='text'>{{ $option->text }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.options.fields.is-correct')</th>
                            <td field-key='is_correct'>{{ $option->is_correct }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.options.fields.question-id')</th>
                            <td field-key='question_id'>{{ $option->question_id }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.options.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


