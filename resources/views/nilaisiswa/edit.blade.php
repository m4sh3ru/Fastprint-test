@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit Nilaisiswa
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('nilaisiswa.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <div class="panel-body">
            @include('nilaisiswa.form', ['model' => $nilai])
        </div>
    </div>

@stop