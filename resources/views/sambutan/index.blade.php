@extends('layouts.app')

@section('title', 'Data Sambutan')

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
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($sambutans->sortBy('id') as $sambutan)  {{-- Ubah sortByDescending menjadi sortBy --}}
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>
                            <img src="/image/sambutan/{{$sambutan->image}}" alt="" class="img-fluid" width="90">
                        </td>
                        
                        <td>
                        <textarea class="form-control" rows="3" readonly>{{ $sambutan->description }}</textarea>                       
                        </td>

                        <td>
                            <a href="{{route('sambutans.edit', $sambutan->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection
