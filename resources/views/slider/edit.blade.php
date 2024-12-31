@extends('layouts.app')

@section('title', 'Data Slider')

@section('content')

<div class="container">
    <a href="/sliders" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form id="sliderForm" action="{{ route ('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                @error('title')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{$slider->title}}">
                </div>
                
                @error('description')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{$slider->description}}</textarea>
                </div>
                 
                @error('image')
                <small style="color: red">{{$message}}</small>   
                @enderror
                <img src="/image/slider/{{$slider->image}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                
                <div class="form-group">
                    <button type="button" id="submitBtn" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Menambahkan event listener untuk tombol submit
        document.getElementById('submitBtn').addEventListener('click', function(event) {
            event.preventDefault();  // Mencegah form untuk langsung disubmit
            
            // Menampilkan SweetAlert2 untuk konfirmasi
            Swal.fire({
                title: 'Apakah Anda yakin ingin mengubah data ini?',
                text: "Data yang dimasukan akan disimpan",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, ubah!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna mengonfirmasi, submit form
                    document.getElementById('sliderForm').submit();
                }
            });
        });
    });
</script>

@endsection

@section('head')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
