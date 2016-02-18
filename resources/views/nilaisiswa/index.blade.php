@extends('layouts.master')

@section('content')

<div class="row" data-ng-init="nilai=$nilai">
	<div class="col-md-8">
  		<div class="col-md-12">
  			@if(Session::get('notif'))
  				{!! Session::get('notif') !!}
  			@endif
  		</div>
  	</div>
</div>

<div class="row">
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				Daftar Nilai Siswa
			</div>
			<div class="panel-body" id="filter">
				<div class="col-md-12">
					<div class="col-md-6">
						<div class="panel-nav"  style="margin-bottom:20px;">
							<a href="{!! route('nilaisiswa.create') !!}" class="btn btn-success btn-sm"><span class="fa fa-plus"></span> Tambahkan Data Siswa</a>
						</div>
					</div>
					<div class="pull-right">
						<div class="panel-nav" style="margin-bottom:20px;">
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Cari Berdasarkan Nama">
						</div>
					</div>
					
					<table class="table table-stripped table-bordered">
						<thead>
							<th class="text-center">No.</th>
							<th>Nama Siswa</th>
							<th class="text-center">Tahun</th>
							<th class="text-center">Nilai</th>
							<th class="text-center">Action</th>
						</thead>
						<tbody id="body">
							@foreach($nilai as $n)
								<tr id="bar">
									<td class="text-center">{!! $no !!}</td>
									<td>{!! $n->nama !!}</td>
									<td>{!! $n->tahun !!}</td>
									<td class="text-center">{!! $n->nilai !!}</td>
									<td class="text-center">
										<div class="btn-group">
											{!! Form::open(['method' => 'DELETE', 'route' => ['nilaisiswa.destroy', $n->id], 'onsubmit'=>'return confirm("Apakah Anda Yakin untuk menghapus data ini?")']) !!}
												<a href="{!! route('nilaisiswa.show', $n->id) !!}" class="btn btn-sm btn-default" title="View" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
												<a href="{!! route('nilaisiswa.edit', $n->id) !!}" class="btn btn-sm btn-default" title="Edit" data-toggle="tooltip"><i class="fa fa-edit"></i></a>
												<button type="submit" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></button>
											{!! Form::close() !!}
										</div>
									</td>
								</tr>
								<?php $no++; ?>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel-footer">
				{!! $nilai->render() !!}
			</div>
		</div>  	
	</div>
	<div class="col-md-4">
		@include('nilaisiswa.grafik')
	</div>
</div>
<input type="hidden" name="_token" id="_token" value="{{{ csrf_token() }}}" />
<script type="text/javascript">
	$('#nama').on('keyup',function() {
		var nama = $('#nama').val();
		var token = $('#_token').val();
		if(nama == null){
			$('#bar').show('slow');
		}else{
			$.post('{!! route("cari_ajax") !!}', {nama:nama, _token:token}, function(data) {
				if(data != false){
					$('#bar').fadeOut('slow');
					$('#body').html(data);
				}else{
					$('#body').html('<tr><td colspan=5>Data Tidak ditemukan!</td></tr>');
				}
			});
		}
	});
</script>


@stop