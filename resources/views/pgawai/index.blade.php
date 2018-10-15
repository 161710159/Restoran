@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">
			  	<center><h1>Data Pegawai Restoran</h1></center>
			  	<div class="panel-title btn btn-primary"><a href="{{ route('pgawai.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Pegawai</th>
					  <th>Jenis Kelamin</th>
					  <th>Alamat</th>
					  <th>Dibawah Kepemimpinan</th>
					  <th>Gaji</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($pgawai as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td><p>{{ $data->jk }}</p></td>
				    	<td>{{ $data->alamat }}</td>
				    	<td><p>{{ $data->Pemilik->nama }}</p></td>
				    	<td>Rp.{{ $data->gaji }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('pgawai.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('pgawai.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('pgawai.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection