@extends('layouts.app')

@section('title', 'Data Sarpras')

@section('content')

<div class="container">
    <a href="/sarprasS" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route ('sarprasS.update', $sarpra->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                @error('judul')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{$sarpra->judul}}">
                </div>

                @error('jumlah')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" placeholder="Jumlah" value="{{$sarpra->jumlah}}">
                </div>
                
                @error('deskripsi')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{$sarpra->deskripsi}}</textarea>
                </div>
                 
                 @error('image')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <img src="/image/sarpras/{{$sarpra->image}}" alt="" class="img-fluid">

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