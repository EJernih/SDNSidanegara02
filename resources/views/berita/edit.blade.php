@extends('layouts.app')

@section('title', 'Data Berita')

@section('content')

<div class="container">
    <a href="/beritas" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form id="beritaForm" action="{{ route('beritas.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                @error('title')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{$berita->title}}">
                </div>
                
                @error('description')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{$berita->description}}</textarea>
                </div>
                 
                @error('image')
                <small style="color: red">{{$message}}</small>   
                @enderror
                <img src="/image/berita/{{$berita->image}}" alt="" class="img-fluid mb-3">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                
                <div class="form-group">
                    <button type="button" id="submitButton" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Initialize EasyMDE
        new EasyMDE({ element: document.querySelector("textarea[name='description']") });

        // SweetAlert2 Confirmation
        const form = document.getElementById('beritaForm');
        const submitButton = document.getElementById('submitButton');

        submitButton.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Show SweetAlert confirmation dialog
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
                    form.submit(); // Submit the form if confirmed
                }
            });
        });
    });
</script>

@endsection

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css">
    <script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
