@extends('layout.main')
@section('title', 'Tambah Fakultas')
@section('content')
    {{-- <h2>Tambah Fakultas</h2>
    <p>Ini halaman tambah fakultas</p>
    <form action="{{  route('fakultas.store') }}" method="post">
        @csrf
        Nama Fakultas
        <input type="text" name="nama" id="" value="{{ old('nama') }}" >
        @error('nama')
            {{ $message }}
        @enderror <br>
        Singkatan
        <input type="text" name="singkatan" id="" value="{{ old('singkatan') }}">
        @error('singkatan')
            {{ $message }}
        @enderror <br>
        <button type="submit">Simpan</button>
    </form> --}}

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Fakultas</h4>
            <p class="card-description">
              Formulir tambah fakultas
            </p>
            <form class="forms-sample" action="{{ route('fakultas.store') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="nama">Nama Fakultas</label>
                <input type="text" name="nama" id="" value="{{ old('nama') }}" class="form-control" >
                @error('nama')
                    {{ $message }}
                @enderror <br>
              </div>
              <div class="form-group">
                <label for="singkatan">Singkatan</label>
                <input type="text" name="singkatan" id="" value="{{ old('singkatan') }}" class="form-control" >
                @error('singkatan')
                    {{ $message }}
                @enderror <br>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Simpan</button>
             <a href="{{ url('fakultas')}}"class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
@endsection
