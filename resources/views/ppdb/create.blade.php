@extends('layouts.app')

@section('title', 'Data PPDB')

@section('content')

<div class="container">
    <a href="/ppdbs" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form id="ppdbForm" action="{{ route ('ppdbs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @error('title')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul">
                </div>

                @error('description')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi"></textarea>
                </div>

                @error('start_date')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Tanggal Mulai</label>
                    <input type="date" class="form-control" name="start_date" placeholder="Tanggal Mulai">
                </div>

                @error('end_date')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Tanggal Selesai</label>
                    <input type="date" class="form-control" name="end_date" placeholder="Tanggal Selesai">
                </div>
                
                @error('place')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Tempat</label>
                    <textarea name="place" id="" cols="30" rows="10" class="form-control" placeholder="Tempat"></textarea>
                </div>

                @error('sk_1')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Syarat 1</label>
                    <input name="sk_1" id=""  class="form-control" placeholder="Syarat 1">
                </div>

                @error('sk_2')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Syarat 2</label>
                    <input name="sk_2" id=""  class="form-control" placeholder="Syarat 2">
                </div>

                @error('sk_3')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Syarat 3</label>
                    <input name="sk_3" id=""  class="form-control" placeholder="Syarat 3">
                </div>
                
                @error('sk_4')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Syarat 4</label>
                    <input name="sk_4" id=""  class="form-control" placeholder="Syarat 4">
                </div>
                 
                 @error('image')
                <small style="color: red">{{$message}}</small>   
                @enderror
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>

                 @error('link')
                <small style="color: red">{{$message}}</small>   
                @enderror
                <div class="form-group">
                    <label for="">Link Pendaftaran</label>
                    <input type="url" class="form-control" name="link">
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
                title: 'Apakah Anda yakin ingin menambah data ini?',
                text: "Data yang dimasukan akan disimpan",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, tambah!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna mengonfirmasi, submit form
                    document.getElementById('ppdbForm').submit();
                }
            });
        });
    });
</script>

@endsection

@section('head')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
