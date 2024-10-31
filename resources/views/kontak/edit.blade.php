@extends('layouts.app')

@section('title', 'Data Kontak')

@section('content')

<div class="container">
    <a href="/kontaks" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route ('kontaks.update', $kontak->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                @error('phone')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Telephone" value="{{ $kontak->phone }}">
                </div>
                
                @error('email')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $kontak->email }}">
                </div>
                 
                @error('address')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="address" id="" cols="30" rows="10" class="form-control" placeholder="Alamat">{{ $kontak->address }}</textarea>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
    
@endsection