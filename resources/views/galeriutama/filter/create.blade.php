@extends('layouts.app')

@section('title', 'Data Filter')

@section('content')

<div class="container">
    <a href="/filters" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route ('filters.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @error('filter')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Filter</label>
                    <input type="text" class="form-control" name="filter" placeholder="Filter">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
    
@endsection