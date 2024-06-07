@extends('layout.main');
@section('title', 'Edit Mahasiswa');

@section('content');
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Ubah Mahasiswa</h4>
        <p class="card-description">
          Formulir ubah mahasiswa
        </p>
        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="npm">NPM</label>
                <input type="text" class="form-control" id="npm" name="npm" value="{{ old('npm') ? old('npm') : $mahasiswa ->npm}}">
                @error('npm')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') ? old('nama') : $mahasiswa ->nama}}">
                @error('nama')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') ? old('tempat_lahir') : $mahasiswa ->tempat_lahir}}">
                @error('tempat_lahir')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') ? old('tanggal_lahir') : $mahasiswa ->tanggal_lahir}}">
                @error('tanggal_lahir')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') ? old('alamat') : $mahasiswa ->alamat}}">
                @error('alamat')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="kota">Kota</label>
                <select name="kota_id" id="" class="form-control">
                    @foreach ($kota as $item)
                        <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
                    @endforeach
                </select>
                @error('kota_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror <br>
            </div>
            <div class="form-group">
                <label for="prodi">Program Studi</label>
                <select name="prodi_id" id="" class="form-control">
                    @foreach ($prodi as $item)
                        <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
                    @endforeach
                </select>
                @error('prodi_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror <br>
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
                @error('foto')
                    <span class="text-danger">{{ $message }}</span> 
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

        </div>
    </div>
</div>
@endsection



