@extends('layouts.app')

@section('title', 'Data Galeri')

@section('content')

<div class="container">
    <a href="/galeris" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route ('galeris.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                @error('title')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{$galeri->title}}">
                </div>
                
                {{-- edit Filter --}}
                <div class="form-group">
                    <label for="filter">Filter</label>
                    <select class="form-control" id="filter_id" name="filter_id">
                        <option value="">Pilih Filter</option>
                        @foreach($filters as $filter)
                            <option value="{{ $filter->id }}" 
                                    {{ $galeri->filter_id == $filter->id ? 'selected' : '' }}>
                                    {{ $filter->filter }}
                            </option>
                        @endforeach
                    </select>
                    @error('filter_id')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                 
                 @error('image')
                <small style="color: red">{{$message}}</small>   
                @enderror
                <img src="/image/galeri/{{$galeri->image}}" alt="" class="img-fluid">
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