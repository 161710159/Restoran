@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="btn btn-primary">
				<center><h1>Show Data Menu Minuman</h1></center>
			  <div class="panel-heading"> 
			  	<div class="btn btn-warning " class="btn -primary"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
        			<div class="form-group">
			  			<label class="control-label">Nama Minuman</label>	
			  			<input type="text" name="title" class="form-control" value="{{ $mnum->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Harga Minuman</label>	
			  			<input type="number" name="title" class="form-control" value="{{ $mnum->harga }}"  readonly>
			  		</div>

			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection