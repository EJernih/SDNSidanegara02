@extends('layouts.app')

@section('title', 'Data Visi Misi')

@section('content')

<div class="container">
    <a href="/visimisis/create" class="btn btn-primary mb-3">Tambah Data</a>
    
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
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($visimisis->sortBy('id') as $visimisi)  {{-- Ubah sortByDescending menjadi sortBy --}}
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $visimisi->visi }}</td>
                        <td>{{ $visimisi->misi }}</td>

                        <td>
                            <a href="{{route('visimisis.edit', $visimisi->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('visimisis.destroy', $visimisi->id)}}" method="POST" style="display:inline-block;">
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
