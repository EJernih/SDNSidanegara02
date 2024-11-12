@extends('layouts.app')

@section('title', 'Data Berita')

@section('content')

<div class="container">
    <a href="/beritas/create" class="btn btn-primary mb-3">Tambah Data</a>
    
    @if ($message = Session::get('message'))
      <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{$message}}</p>
    </div>  
    @endif
    
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($beritas->sortBy('id') as $berita)  {{-- Ubah sortByDescending menjadi sortBy --}}
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $berita->title }}</td>
                        <td>{{ Str::limit($berita->description, 25) }}</td>
                        <td>
                            <img src="/image/berita/{{$berita->image}}" alt="" class="img-fluid" width="90">
                        </td>
                        <td>
                            <a href="{{ route('beritas.show', $berita->id) }}" class="btn btn-info">Baca Selengkapnya</a>
                            <a href="{{route('beritas.edit', $berita->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('beritas.destroy', $berita->id)}}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
 <script>
        document.addEventListener("DOMContentLoaded", function() {
            new EasyMDE({ element: document.querySelector("textarea[name='description']") });
        });
    </script>
    

@endsection

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css">
    <script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script>
@endsection
