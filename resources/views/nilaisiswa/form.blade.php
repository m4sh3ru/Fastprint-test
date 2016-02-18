
        
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-horizontal">
    @if (isset($nilai))
        {!! Form::model($nilai, ['files' => true, 'method' => 'PUT', 'route' => ['nilaisiswa.update', $nilai->id], 'onsubmit'=>'return confirm("Apakah anda yakin akan menyimpan perubahan terhadap data ini?")']) !!}
    @else
        {!! Form::open(['files' => true, 'route' => 'nilaisiswa.store', 'onsubmit'=>'return confirm("Apakah anda yakin akan menyimpan data yang anda input?")', 'id'=>'form']) !!}
    @endif
    
	<div class="form-group">
	    {!! Form::label('nama', 'Nama Siswa:', ['class' => 'col-md-2 control-label']) !!}
	    <div class="col-sm-9">
	        {!! Form::text('nama', null, ['class' => 'form-control', 'id'=>'nama', 'required','data-required'=>'Field ini tidak boleh dikosongi']) !!}
	    </div>
	</div>
    <div class="form-group">
        {!! Form::label('tahun', 'Tahun:', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-sm-9">
            <select name="tahun" class="form-control" required>
                <option value="">Pilih Tahun :</option>
                @for($i=1965;$i<=2030; $i++)
                <option @if(isset($nilai)) @if($nilai->tahun == $i) {!! 'selected' !!} @endif @endif>{!! $i !!}</option>
                @endfor
            </select>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('nilai', 'Nilai:', ['class' => 'col-md-2 control-label', 'id'=>'nilai']) !!}
        <div class="col-sm-9">
            {!! Form::text('nilai', null, ['class' => 'form-control','filter'=>'number','data-invalid'=>'Field ini diisi berupa angka!', 'required']) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label"></label>
        <div class="col-sm-9">
            <button class="btn btn-sm btn-primary"><span class="fa fa-save"></span> Simpan</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>