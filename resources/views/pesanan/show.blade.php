@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="btn btn-primary">
				<center><h1>Show Tambah Pesanan</h1></center>
			  <div class="panel-heading"> 
			  	<div class="btn btn-warning " class="btn -primary"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
            			<div class="form-group">
			  			<label class="control-label">No Lantai Yang Di Pesan</label>	
			  			<input type="text" name="title" class="form-control" value="{{ $pesanan->lantai }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Nama Pegawai</label>
						<input type="text" name="title" class="form-control" value="{{ $pesanan->Pgawai->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
                    <strong>Makanan</strong><br>@foreach($pesanan->Makanan as $data){{ $data->nama }}, @endforeach
                    </div>
			  		<div class="form-group">
                    <strong>Minuman</strong><br>@foreach($pesanan->Mnum as $data){{ $data->nama }}, @endforeach

			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection