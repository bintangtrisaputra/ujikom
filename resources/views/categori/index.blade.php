@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar categori</h1>
    <a href="#" class="btn btn-primary">Tambah categori</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>categori</th>

            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($categoris as $categori)
                <tr>
                    <td>{{ $categori->id }}</td>
                    <td>{{ $categori->nama_categori }}</td>
                    <td>
                        <a href="{{ route('categori.edit', $categori->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('categori.destroy', $categori->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach --}}
                <tr>
                    <td>1</td>
                    <td>Horor</td>
                    <td>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <form action="#" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
</div>
@endsection
