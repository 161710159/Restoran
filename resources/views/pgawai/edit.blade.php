@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">
			  	<center><h1>Edit Data Pegawai Restoran</h1></center>
			  	<div class="panel-title btn btn-primary"><a href="{{ route('pgawai.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('pgawai.update',$pgawai->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Pegawai</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $pgawai->nama }}" required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>

                            @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('jk') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Kelamin</label>	

			  			<input type= "radio" name="jk" value="perempuan" class="form-control" rows="10" required>Perempuan
			  			<input type= "radio" name="jk" value="Pria" class="form-control" rows="10" required>Pria
			  			@if ($errors->has('jk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jk') }}</strong>
                            </span>

                            @endif
                        </div>
                            <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $pgawai->alamat }}" required>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>


                            

                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('pemilik_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Di Bawah Kepemimpinan</label>	
			  			<select name="pemilik_id" class="form-control">
			  				@foreach($pemilik as $data)
			  				<option value="{{ $data->id }}" {{ $selectedPemilik == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('pemilik_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pemilik_id') }}</strong>
                            </span>

                            @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('gaji') ? ' has-error' : '' }}">
			  			<label class="control-label">Gaji</label>	
			  			<input type="text" value="{{ $pgawai->gaji }}" name="gaji" class="form-control"  required>
			  			@if ($errors->has('gaji'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gaji') }}</strong>
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