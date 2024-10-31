@extends('layouts.app')

@section('title', 'Data Filter')

@section('content')

<div class="container">
    <a href="/filters" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route ('filters.update', $filter->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                @error('filter')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Filter</label>
                    <input type="text" class="form-control" name="filter" placeholder="Filter" value="{{$filter->filter}}">
                </div>
                

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
    
@endsection