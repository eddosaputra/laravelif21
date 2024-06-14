@extends('layout.main')
@section('title', 'Daftar Fakultas')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Daftar Program Studi</h4>
            <p class="card-description">
            List program studi
            </p>
            @can('create', App\Models\Prodi::class)
            <a href="{{ url('prodi/create') }}" class="btn btn-primary btn-rounded btn-fw">Tambah</a>
            @endcan
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Nama Program Studi</th>
                    <th>Nama Fakultas</th>
                    <th>Singkatan</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($prodi as $item)
                    <tr>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['fakultas'] ['nama'] }}</td>
                        <td>{{ $item['fakultas'] ['singkatan'] }}</td>
                        <td>
                          @can('update', $item)
                          <form action="{{ route('prodi.destroy', $item->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger btn-rounded show_confirm" data-toggle="tooltip" data-nama="{{ $item['nama'] }}" title="hapus">Hapus</button>
                          </form>
                          @endcan
                        </td>
                    </tr>
                    @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection