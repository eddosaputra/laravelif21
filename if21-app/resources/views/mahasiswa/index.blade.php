@extends('layout.main')
@section('title', 'Daftar Mahasiswa')
@section('content')

<div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Daftar Mahasiswa</h4>
            <p class="card-description">
            List data mahasiswa
            </p>
            <a href="{{ url('mahasiswa/create') }}" class="btn btn-primary btn-rounded btn-fw">Tambah</a>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                      <th>NPM</th>
                      <th>Nama Mahasiswa</th>
                      <th>Kota</th>
                      <th>Prodi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $item)
                    <tr>
                        <td>{{ $item->npm }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->kota->nama }}</td>
                        <td>{{ $item->prodi->nama }}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 @if (session('success'))
<script>
   Swal.fire({
     title: "Good job!",
     text: "You clicked the button!",
     icon: "success"
   });
   </script>

@endif
@endsection


