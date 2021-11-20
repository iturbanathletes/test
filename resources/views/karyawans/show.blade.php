@extends('layouts/main', ['title' => 'Daftar Nama Karyawan', 'side' => 'Karyawan'])

@section('contents')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $karyawan->nama_karyawan }} </h1>
            
            <a href="/karyawan" class="btn btn-success"> Back </a> 
        </div>
    </div>
</div>

@endsection