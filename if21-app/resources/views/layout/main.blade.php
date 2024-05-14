<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <h1>Universitas MDP</h1>
    <a href="{{ url('fakultas') }}">List Fakultas</a> | <a href="{{ url('prodi') }}">List Prodi</a> | <a href="{{ url('fakultas/create') }}">Tambah Fakultas</a> | <a href="{{ url('prodi/create') }}">Tambah Prodi</a>
    
    @yield('content')
    
    &copy; 2024 Universitas MDP
    
</body>
</html>