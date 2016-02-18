@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Menambahkan Nilai Siswa Baru!
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <div class="btn-group">
                    <a href="{!! route('nilaisiswa.index') !!}" class="btn btn-default btn-sm"><span class="fa fa-long-arrow-left"></span>Kembali</a>
                    <a href="{!! route('nilaisiswa.create') !!}" class="btn btn-default btn-sm"><span class="fa fa-plus"></span> Tambahkan Nilai Baru</a>
                </div>
            </div>
        </div>
        <div class="panel-body">
            @include('nilaisiswa.form')
        </div>
    </div>

@stop