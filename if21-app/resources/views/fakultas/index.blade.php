@extends('layout.main')
@section('title', 'Daftar Fakultas')
@section('content')

<div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Daftar Fakultas</h4>
            <p class="card-description">
            List data fakultas
            </p>
            @can('create', App\Models\Fakultas::class)
            <a href="{{ url('fakultas/create') }}" class="btn btn-primary btn-rounded btn-fw">Tambah</a>
            @endcan
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Nama Fakultas</th>
                    <th>Singkatan</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($fakultas as $item)
                    <tr>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['singkatan'] }}</td>
                        <td>
                          <form action="{{ route('fakultas.destroy', $item->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger btn-rounded show_confirm" data-toggle="tooltip" data-nama="{{ $item['nama'] }}" title="hapus">Hapus</button>
                          </form>
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


