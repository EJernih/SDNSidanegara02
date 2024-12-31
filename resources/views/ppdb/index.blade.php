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
                    <th style="width: 5%;">No</th>
                    <th style="width: 10%;">Judul</th>
                    <th style="width: 15%;">Deskripsi</th>
                    <th style="width: 15%;">Tanggal Mulai - Tanggal Selesai</th>
                    <th style="width: 10%;">Tempat</th>
                    <th style="width: 10%;">Syarat 1</th>
                    <th style="width: 10%;">Syarat 2</th>
                    <th style="width: 10%;">Syarat 3</th>
                    <th style="width: 10%;">Syarat 4</th>
                    <th style="width: 10%;">Gambar</th>
                    <th style="width: 15%;">Link Pendaftaran</th>
                    <th style="width: 5%;">Aksi</th>
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
                            <img src="/image/ppdb/{{$ppdb->image}}" alt="" class="img-fluid" style="max-width: 90px;">
                        </td>
                        <td>
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
