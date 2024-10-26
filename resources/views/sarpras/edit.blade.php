@extends('layouts.app')

@section('title', 'Data Sarpras')

@section('content')

<div class="container">
    <a href="/sarprases" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route ('sarprases.update', $sarpras->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                @error('title')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Judul" value="{{$sarpras->title}}">
                </div>
                
                @error('description')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{$sarpras->description}}</textarea>
                </div>
                 
                 @error('image')
                <small style="color: red">{{$message}}</small>   
                @enderror
                <img src="/image/sarpras/{{$sarpras->image}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
    
@endsection