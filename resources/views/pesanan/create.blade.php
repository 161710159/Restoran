@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="btn btn-primary">
				<center><h1>Tambah Data Pesanan</h1></center>
			  <div class="panel-heading"> 
			  	<div class="btn btn-warning"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('pesanan.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('lantai') ? ' has-error' : '' }}">
			  			<label class="control-label">Bangku Yang Di Pesan</label>	
			  			<input type="text" name="lantai" class="form-control"  required/>
			  			@if ($errors->has('lantai'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lantai') }}</strong>
                            </span>
                
                         @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('pgawai_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Pegawai Yang Melayani</label>	
			  			<select name="pgawai_id" class="form-control">
			  				@foreach($pgawai as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('pgawai_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pgawai_id') }}</strong>
                            </span>


                         @endif
                            </div>
                        <div class="form-group {{ $errors->has('makanan_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Makanan Yang Dipesan</label>	
			  			<select name="makanan_id[]" class="form-control js-example-basic-multiple" multiple="multiple">
			  				@foreach($makanan as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('makanan_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('makanan_id') }}</strong>
                            </span>

                             @endif
                            </div>
			  		<div class="form-group {{ $errors->has('mnum_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Minuman Yang Dipesan</label>	
			  			<select name="mnum_id[]" class="form-control js-example-basic-multiple" multiple="multiple">
			  				@foreach($mnum as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('mnum_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mnum_id') }}</strong>
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