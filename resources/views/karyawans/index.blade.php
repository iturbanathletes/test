@extends('layouts/main', ['title' => 'Daftar Nama Karyawan', 'side' => 'Karyawan'])

@section('contents')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Daftar Nama Karyawan</h1>
      </div><!-- /.col -->

    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->



<!-- Main content  ---------------------------------------------------------------------------------------------------------->
<section class="content">
  <div class="container">

    @if (session('massage'))
    <div id="massage" data-massage="{{ session('massage') }}"></div>
    @endif


    <div class="row">
      <div class="col">
        <a href="/karyawan/create" class="btn btn-primary mb-3">Tambah Karyawan</a>

        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Club</th>
              <th scope="col">Divisi</th>
              <th scope="col">Jabatan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($karyawans as $karyawan)

              <tr>
                <th scope="row{">{{ $loop->iteration }}</th>
                <td>{{ $karyawan->nama_karyawan }}</td>
                <td>{{ $karyawan->club }}</td>
                <td>{{ $karyawan->divisi }}</td>
                <td>{{ $karyawan->jabatan }}</td>
                <td>
                  <a href="/karyawan/{{ $karyawan->id }}" class="badge bg-black rounded-pill text-decoration-none">Detail</a>
                  <a href="/karyawan/{{ $karyawan->id }}/edit" class="badge bg-green rounded-pill text-decoration-none">Edit</a>
                  {{-- <a href="#" class="badge bg-red rounded-pill text-decoration-none">Delete</a> --}}
                  <form action="/karyawan/{{ $karyawan->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-red rounded-pill text-decoration-none" onclick="return confirm('Are you sure ?')">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach  
          </tbody>
        </table>

      </div>
    </div>

  </div><!-- /.container-fluid -->
</section>
<!-- /.content akhir -------------------------------------------------------------------------------------------------------->

@endsection