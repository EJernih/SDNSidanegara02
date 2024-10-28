@extends('layouts.app')

@section('title', 'Data Prestasi')

@section('content')

<div class="container">
    <a href="/prestasis/create" class="btn btn-primary mb-3">Tambah Data</a>
    
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
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($prestasis->sortBy('id') as $prestasi)  {{-- Ubah sortByDescending menjadi sortBy --}}
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $prestasi->title }}</td>
                        <td>{{ $prestasi->date }}</td>
                        <td>{{ $prestasi->description }}</td>
                        <td>
                            <img src="/image/prestasi/{{$prestasi->image}}" alt="" class="img-fluid" width="90">
                        </td>
                        <td>
                            <a href="{{route('prestasis.edit', $prestasi->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('prestasis.destroy', $prestasi->id)}}" method="POST" style="display:inline-block;">
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
