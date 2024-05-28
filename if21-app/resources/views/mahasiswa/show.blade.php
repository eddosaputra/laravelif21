@extends('layout.main');
@section('title', 'Detail Mahasiswa');
@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail Mahasiswa</h4>
                <p class="card-description">
                    Detail data mahasiswa
                </p>
                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="text" name="npm" id="" value="{{ $mahasiswa->npm }}" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" name="nama" id="" value="{{ $mahasiswa->nama }}" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Prodi</label>
                    <input type="text" name="nama" id="" value="{{ $mahasiswa->prodi->nama }}" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Asal Kota</label>
                    <input type="text" name="nama" id="" value="{{ $mahasiswa->kota->nama }}" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Tanggal Lahir</label>
                    <input type="text" name="nama" id="" value="{{ $mahasiswa->tanggal_lahir }}" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Alamat</label>
                    <input type="text" name="nama" id="" value="{{ $mahasiswa->alamat }}" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Foto</label>
                    <input type="text" name="nama" id="" value="{{ $mahasiswa->url_foto }}" class="form-control" readonly>
                </div>




        </div>
    </div>
</div>
@endsection
