@extends('layouts.app')

@section('title', 'Data Akun')

@section('content')

<div class="container">
    <a href="/akuns" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route ('akuns.update', $akun->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                @error('username')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username" value="{{ $akun->username }}">
                </div>
                
                @error('email')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $akun->email }}">
                </div>
                 
                @error('password')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Password" value="{{ $akun->password }}">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
    
@endsection