@extends('layouts.app')

@section('title', 'Data Tenaga Pendidik')

@section('content')

<div class="container">
    <a href="/tendiks/create" class="btn btn-primary mb-3">Tambah Data</a>
    
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
                    <th>Nama</th>
                    <th>Pelajaran</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($tendiks->sortBy('id') as $tendik)  {{-- Ubah sortByDescending menjadi sortBy --}}
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $tendik->nama }}</td>
                        <td>{{ $tendik->pelajaran }}</td>
                        <td>
                            <img src="/image/tendik/{{$tendik->image}}" alt="" class="img-fluid" width="90">
                        </td>
                        <td>
                            <a href="{{route('tendiks.edit', $tendik->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('tendiks.destroy', $tendik->id)}}" method="POST" style="display:inline-block;">
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
