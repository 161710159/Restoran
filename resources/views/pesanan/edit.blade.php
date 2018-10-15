@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">
			  	<center><h1>Edit Data Pesanan Restoran</h1></center>
			  	<div class="panel-title btn btn-primary"><a href="{{ route('pesanan.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">

			  	<form action="{{ route('pesanan.update',$pesanan->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('lantai') ? ' has-error' : '' }}">
			  			<label class="control-label">No Bangku Pesanan</label>	
			  			<input type="number" name="lantai" class="form-control" value="{{ $pesanan->lantai }}" required>
			  			@if ($errors->has('lantai'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lantai') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('pgawai_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Pegawai</label>	
			  			<select name="pgawai_id" class="form-control">
			  				@foreach($pgawai as $data)
			  				<option value="{{ $data->id }}" {{ $selectedPgawai == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('pgawai_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pgawai_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('makanan_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Makanan</label>	
			  			<select name="makanan_id" class="form-control">
			  				@foreach($makanan as $data)
			  				<option value="{{ $data->id }}"{{ (in_array($data->id, $selected)) ? ' selected="selected"' : '' }}>{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('makanan_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('makanan_id') }}</strong>
                            </span>

                             @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('mnum_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Minuman</label>	
			  			<select name="mnum_id" class="form-control">
			  				@foreach($makanan as $data)
			  				<option value="{{ $data->id }}"{{ (in_array($data->id, $selected)) ? ' selected="selected"' : '' }}>{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('mnum_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mnum_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection