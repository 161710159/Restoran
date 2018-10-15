@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="btn btn-primary">
				<center><h1>Show  Data Pemilik Restoran</h1></center>
			  <div class="panel-heading"> 
			  	<div class="btn btn-warning " class="btn -primary"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $a->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Jenis Kelamin</label>	
			  			<input type="text" name="jk" class="form-control" value="{{ $a->jk }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Setatus</label>	
			  			<input type="text" name="status" class="form-control" value="{{ $a->status }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $a->alamat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Sejarah</label>	
			  			<input type="text" name="sejarah" class="form-control" value="{{ $a->sejarah }}"  readonly>
			  		</div>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection