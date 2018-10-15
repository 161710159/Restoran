@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="btn btn-primary">
				<center><h1>Tambah Data Pemilik Restoran</h1></center>
			  <div class="panel-heading"> 
			  	<div class="btn btn-warning"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('pemilik.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                
                         @endif
			  		</div>
			  		<center><div class="form-group {{ $errors->has('jk') ? ' has-error' : '' }}">
			  			<b><label class="control-label">Jenis Kelamin</label>	</b>
			  			<input type= "radio" name="jk" value="Perempuan" class="form-control" rows="10" required>Perempuan<br/>
			  			<input type= "radio" name="jk" value="Pria" class="form-control" rows="10" required>Pria
			  			@if ($errors->has('jk'))</center>
                            <span class="help-block">
                                <strong>{{ $errors->first('jk') }}</strong>
                            </span>
                    
                        @endif
                    </div>
					<div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
			  			<label class="control-label">Status</label>	
			  			<input type="text" name="status" class="form-control"  required>
			  			@if ($errors->has('status'))
                            <span class="help-block">
                                <strong>{{ $errors->first('status') }}</strong>
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
					<div class="form-group {{ $errors->has('sejarah') ? ' has-error' : '' }}">
			  			<label class="control-label">Sejarah Restoran</label>	
			  			<input type="text" name="sejarah" class="form-control"  required>
			  			@if ($errors->has('sejarah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sejarah') }}</strong>
                            </span>                            
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-center">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection