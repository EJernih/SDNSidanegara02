@extends('layouts.app')

@section('title', 'Data Visi Misi')

@section('content')

<div class="container">
    <a href="/visimisis" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route ('visimisis.update', $visimisi->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf


                
                @error('visi')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Visi</label>
                    <textarea name="visi" id="" cols="30" rows="10" class="form-control" placeholder="Visi">{{$visimisi->visi}}</textarea>
                </div>

                @error('misi')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Misi</label>
                    <textarea name="misi" id="" cols="30" rows="10" class="form-control" placeholder="Misi">{{$visimisi->misi}}</textarea>
                </div>
                 

                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
    
@endsection