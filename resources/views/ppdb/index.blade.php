@extends('layouts.app')

@section('title', 'Data PPDB')

@section('content')

<div class="container">
    
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
                    <th>Link Pendaftaran</th>
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
                            <!-- Tombol dinamis untuk daftar -->
                            @if ($ppdb->link)
                                <a href="{{ $ppdb->link }}" target="_blank" class="btn btn-primary">Daftar Sekarang</a>
                            @else
                                <span>Link belum tersedia</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('ppdbs.edit', $ppdb->id)}}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection
