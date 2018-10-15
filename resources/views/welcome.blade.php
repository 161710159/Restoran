@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <center><h1><div class="panel-heading">Selamat Datang Di Restoran Kami</div></h1></center>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                <center>Silahkan Login Terlebih Dahulu!</center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
