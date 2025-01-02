@extends('layouts.app')

@section('title', 'Data Kontak')

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
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($kontaks->sortBy('id') as $kontak)  {{-- Ubah sortByDescending menjadi sortBy --}}
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $kontak->phone }}</td>
                        <td>{{ $kontak->email }}</td>
                        <td>{{ $kontak->address }}</td>

                        <td>
                            <a href="{{route('kontaks.edit', $kontak->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection
