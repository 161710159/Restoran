@extends('layouts.app')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="btn btn-primary">
				<center><h1>Show Data Menu Makanan</h1></center>
			  <div class="panel-heading"> 
			  	<div class="btn btn-warning " class="btn -primary"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Makanan</label>	
			  			<input type="text" name="title" class="form-control" value="{{ $makanan->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Harga Makanan</label>	
			  			<input type="number" name="title" class="form-control" value="{{ $makanan->harga }}"  readonly>
			  		</div>

			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection