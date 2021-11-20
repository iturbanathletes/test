@extends('layouts/main', ['title' => 'Daftar Nama Karyawan', 'side' => 'Karyawan'])

@section('contents')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Karyawan </h1>
        </div><!-- /.col -->
  
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<div class="col-lg-8">
    <form method="POST" action="/karyawan/{{ $karyawan->id }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="nik" class="form-label">NIK</label>
          <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" required autofocus value="{{ old('nik', $karyawan->nik) }}" >
          @error('nik')
            <div class="invalid-feedback">
                {{ $message }}
            </div>   
          @enderror  
        </div>
        <div class="mb-3">
            <label for="nama_karyawan" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama_karyawan') is-invalid @enderror" id="nama_karyawan" name="nama_karyawan" required  value="{{ old('nama_karyawan', $karyawan->nama_karyawan ) }}" >
            @error('nama_karyawan')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>   
            @enderror  
        </div>
        
        <div class="mb-3">
          <label for="club" class="form-label">Club</label>
          <select class="form-select" name="club">
              @foreach ($clubs as $club)
                @if (old('club',$karyawan->club)==$club->id)
                    <option value="{{ $club->id }}" selected>{{ $club->nama_club }}</option>
                @else
                    <option value="{{ $club->id }}">{{ $club->nama_club }}</option>
                @endif
              @endforeach
          </select>
        </div>

        <div class="mb-3">
            <label for="divisi" class="form-label">Divisi</label>
            <select class="form-select" name="divisi">
                @foreach ($divisis as $divisi)
                  @if (old('divisi',$karyawan->divisi)==$divisi->id)
                      <option value="{{ $divisi->id }}" selected>{{ $divisi->nama_divisi }}</option>
                  @else
                      <option value="{{ $divisi->id }}">{{ $divisi->nama_divisi }}</option>
                  @endif
                @endforeach
            </select>
        </div>
    
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <select class="form-select" name="jabatan">
                @foreach ($jabatans as $jabatan)
                  @if (old('jabatan',$karyawan->jabatan)==$jabatan->id)
                      <option value="{{ $jabatan->id }}" selected>{{ $jabatan->nama_jabatan }}</option>
                  @else
                      <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                  @endif
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jenis_kelamin" >
                @if (old('jenis_kelamin',$karyawan->jenis_kelamin)=="Laki laki")
                    <option value="Laki laki" selected>Laki-laki</option>  
                    <option value="Perempuan">Perempuan</option>  
                @else
                <option value="Laki laki" >Laki-laki</option>
                    <option value="Perempuan" selected>Perempuan</option>  
                @endif
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="/karyawan" class="btn btn-primary">Cancel</a>
    </form>   
</div>

@endsection