@extends('layouts.app')

@section('title', 'Data Galeri')

@section('content')

<div class="container">
    <a href="/galeris" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route ('galeris.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @error('title')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul">
                </div>
                
                @error('filter')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="filter">Filter</label>
                    <select name="filter" id="filter" class="form-control" aria-placeholder="Pilih Filter">
                        <option selected disabled>Pilih Filter</option>
                        @foreach ($filters as $item)
                            <option value="{{ $item->filter }}">{{ $item->filter }}</option>
                        @endforeach
                    </select>
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