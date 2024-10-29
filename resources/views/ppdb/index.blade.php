@extends('layouts.app')

@section('title', 'Data PPDB')

@section('content')

<div class="container">
    <a href="/ppdbs/create" class="btn btn-primary mb-3">Tambah Data</a>
    
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
                    <th>Tanggal Mulai - Tanggal Selesai</th>
                    <th>Tempat</th>
                    <th>Syarat 1</th>
                    <th>Syarat 2</th>
                    <th>Syarat 3</th>
                    <th>Syarat 4</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($ppdbs->sortBy('id') as $ppdb)  {{-- Ubah sortByDescending menjadi sortBy --}}
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $ppdb->title }}</td>
                        <td>{{ $ppdb->description }}</td>
                        <td>{{ $ppdb->start_date }} - {{ $ppdb->end_date }}</td>
                        <td>{{ $ppdb->place }}</td>
                        <td>{{ $ppdb->sk_1 }}</td>
                        <td>{{ $ppdb->sk_2 }}</td>
                        <td>{{ $ppdb->sk_3 }}</td>
                        <td>{{ $ppdb->sk_4 }}</td>
                        <td>
                            <img src="/image/ppdb/{{$ppdb->image}}" alt="" class="img-fluid" width="90">
                        </td>
                        <td>
                            <a href="{{route('ppdbs.edit', $ppdb->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('ppdbs.destroy', $ppdb->id)}}" method="POST" style="display:inline-block;">
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
