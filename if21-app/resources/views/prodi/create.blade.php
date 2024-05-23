@extends('layout.main')
@section('title', 'Tambah Prodi')
@section('content')
    {{-- <h2>Tambah Prodi</h2>
    <p>Ini halaman tambah prodi</p>
    <form action="{{  route('prodi.store') }}" method="post">
        @csrf
        Nama Program Studi
        <input type="text" name="nama" id="" value="{{ old('nama') }}" >
        @error('nama')
            {{ $message }}
        @enderror <br>
        Fakultas
        <select name="fakultas_id" id="">
            @foreach ($fakultas as $item)
                <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
            @endforeach
        </select>
        @error('fakultas_id')
            {{ $message }}
        @enderror <br>
        <button type="submit">Simpan</button>
    </form> --}}

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Program Studi</h4>
            <p class="card-description">
              Formulir tambah program studi
            </p>
            <form class="forms-sample" action="{{ route('prodi.store') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="nama">Nama Program studi</label>
                <input type="text" name="nama" id="" value="{{ old('nama') }}" class="form-control" >
                @error('nama')
                    {{ $message }}
                @enderror <br>
              </div>
              <div class="form-group">
                <label for="singkatan">Fakultas</label>
                <select name="fakultas_id" id="" class="form-control">
                    @foreach ($fakultas as $item)
                        <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
                    @endforeach
                </select>
                @error('fakultas_id')
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
