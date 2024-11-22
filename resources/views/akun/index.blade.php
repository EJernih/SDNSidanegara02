@extends('layouts.app')

@section('title', 'Data Akun')

@section('content')

<div class="container">
    <a href="/akuns/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($akuns->sortBy('id') as $akun)  {{-- Ubah sortByDescending menjadi sortBy --}}
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $akun->username }}</td>
                        <td>{{ $akun->email }}</td>
                        <td>{{ $akun->password }}</td>

                        <td>
                            <a href="{{route('akuns.edit', $akun->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('akuns.destroy', $akun->id)}}" method="POST" style="display:inline-block;">
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
