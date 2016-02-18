@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Lengkap Nilai Siswa
                <div class="panel-nav pull-right" style="margin-top: -7px;">
                    <div class="btn-group">
                        <a href="{!! route('nilaisiswa.index') !!}" class="btn btn-default btn-sm">Back</a>
                        <a href="{!! route('nilaisiswa.edit', $nilai->id) !!}" class="btn btn-sm btn-default">Edit</a>
                    </div>
                </div>
            </div>
            <table class="table table-stripped table-bordered">
                <tr>
                    <td><b>ID</b></td>
                    <td>{!! $nilai->id !!}</td>
                </tr>
                <tr>
                    <td><b>Nama Siswa</b></td>
                    <td>{!! strtoupper($nilai->nama) !!}</td>
                </tr>

                <tr>
                    <td><b>Tahun</b></td>
                    <td>{!! $nilai->tahun !!}</td>
                </tr>
                <tr>
                    <td><b>Nilai</b></td>
                    <td>{!! $nilai->nilai !!}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@stop