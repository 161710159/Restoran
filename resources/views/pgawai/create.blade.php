@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="btn btn-primary">
				<center><h1>Tambah Data Pegawai Restoran</h1></center>
			  <div class="panel-heading"> 
			  	<div class="btn btn-warning"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('pgawai.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Pegawai Restoran</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>

                             @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('jk') ? ' has-error' : '' }}">
			  			<b><label class="control-label">Jenis Kelamin</label>	</b>
			  			<input type= "radio" name="jk" value="Perempuan" class="form-control" rows="10" required>Perempuan
			  			<input type= "radio" name="jk" value="Pria" class="form-control" rows="10" required>Pria
			  			@if ($errors->has('jk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jk') }}</strong>
                            </span>


                             @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control"  required>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>


                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('pemilik_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Di Atas Kepemimpinan </label>	
			  			<select name="pemilik_id" class="form-control">
			  				@foreach($pemilik as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
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
			  			<input type="number" name="gaji" class="form-control"  required>
			  			@if ($errors->has('gaji'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gaji') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection