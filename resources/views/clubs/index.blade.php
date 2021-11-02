@extends('layouts/main', ['title' => 'Daftar Nama Club', 'side' => 'Club'])

@section('contents')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Daftar Nama Club</h1>
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

    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-sm-5">
        <a href="#" class="btn btn-primary mb-3">Tambah Club</a>

        <ol class="list-group list-group-numbered">
          @for ($i = 1; $i < 4; $i++) <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
              <div class="fw-bold">Nama Club {{$i}}</div>
            </div>
            <div>
              <!-- {{-- <a href="{{ route('club.edit', ['club' => $club->id]) }}"
                class="badge bg-yellow rounded-pill text-decoration-none">Edit</a> --}} -->
              <a href="#" class="badge bg-black rounded-pill text-decoration-none">Detail</a>
              <button type="button" class="btn badge bg-danger rounded-pill text-decoration-none">Hapus</button>
            </div>
            </li>
            @endfor

        </ol>
      </div>
    </div>

  </div><!-- /.container-fluid -->
</section>
<!-- /.content akhir -------------------------------------------------------------------------------------------------------->


@endsection