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
        <a href="#" class="btn btn-primary mb-3">Tambah Karyawan</a>

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
            <tr>
              <th scope="row">1</th>
              <td>Wajar Kriswanto</td>
              <td>MERR</td>
              <td>Divisi 2</td>
              <td>Jabatan 2</td>
              <td>
                <a href="#" class="badge bg-black rounded-pill text-decoration-none">Detail</a>
                <a href="#" class="badge bg-green rounded-pill text-decoration-none">Edit</a>
                <a href="#" class="badge bg-red rounded-pill text-decoration-none">Delete</a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Percobaan</td>
              <td>HO</td>
              <td>Divisi 1</td>
              <td>Jabatan 1</td>
              <td>
                <a href="#" class="badge bg-black rounded-pill text-decoration-none">Detail</a>
                <a href="#" class="badge bg-green rounded-pill text-decoration-none">Edit</a>
                <a href="#" class="badge bg-red rounded-pill text-decoration-none">Delete</a>
              </td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>

  </div><!-- /.container-fluid -->
</section>
<!-- /.content akhir -------------------------------------------------------------------------------------------------------->

@endsection