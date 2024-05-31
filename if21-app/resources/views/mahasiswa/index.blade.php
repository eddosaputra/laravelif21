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
                      <th>Foto</th>
                      <th>NPM</th>
                      <th>Nama Mahasiswa</th>
                      <th>Nama Prodi</th>
                      <th>Asal Kota</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $item)
                    <tr>
                        <td><img src="{{ url('foto/'.$item['url_foto']) }}"</td>
                        <td>{{ $item->npm }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->prodi->nama }}</td>
                        <td>{{ $item->kota->nama }}</td>
                        <td><a href="{{ route('mahasiswa.show', $item['id']) }}" class="btn btn-sm btn-info btn-rounded">Show</a></td>
                        <td>
                        <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="post">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-sm btn-danger btn-rounded">Hapus</button>
                        </td>
                        </form>
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
     text: "{{ session('success') }}",
     icon: "success"
   });
   </script>

@endif
@endsection


