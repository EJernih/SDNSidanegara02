@extends('layouts.app')

@section('title', 'Data Galeri')

@section('content')

<div class="container">
    <a href="/galeris/create" class="btn btn-primary mb-3">Tambah Data</a>
    
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
                    <th>Filter</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($galeris->sortBy('id') as $galeri)  {{-- Ubah sortByDescending menjadi sortBy --}}
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $galeri->title }}</td>
                        <td>{{ $galeri->filter->filter }}</td> {{-- Menampilkan nama filter dari relasi galeri ke filter --}}
                        <td>
                            <img src="/image/galeri/{{$galeri->image}}" alt="" class="img-fluid" width="90">
                        </td>
                        <td>
                            <a href="{{route('galeris.edit', $galeri->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('galeris.destroy', $galeri->id)}}" method="POST" style="display:inline-block;">
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
    
@endsection
