@extends('layouts.app')

@section('title', 'Data Tenaga Pendidik')

@section('content')

<div class="container">
    <a href="/tendiks" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route ('tendiks.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @error('nama')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama">
                </div>
                
                @error('pelajaran')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Mata Pelajaran Yang Diampuh</label>
                    <input type="text" class="form-control" name="pelajaran" placeholder="Pelajaran">
                </div>
                 
                 @error('image')
                <small style="color: red">{{$message}}</small>   
                @enderror
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
    
@endsection