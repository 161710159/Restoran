@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="btn btn-primary">
				<center><h1>Show Data Pegawai Restoran</h1></center>
			  <div class="panel-heading"> 
			  	<div class="btn btn-warning"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Pegawai</label>	
			  			<input type="text" name="title" class="form-control" value="{{ $pgawai->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Jenis Kelamin</label>
						<input type="text" name="title" class="form-control" value="{{ $pgawai->jk }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Alamat</label>
						<input type="text" name="title" class="form-control" value="{{ $pgawai->alamat }}"  readonly>
			  		</div>


			  		<div class="form-group">
			  			<label class="control-label">Di Bawah Kepemimpinan</label>
						<input type="text" name="title" class="form-control" value="{{ $pgawai->Pemilik->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Gaji</label>
						<input type="text" name="title" class="form-control" value="{{ $pgawai->gaji }}"  readonly>
			  		</div>

			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection