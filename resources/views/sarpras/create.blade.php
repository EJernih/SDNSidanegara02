@extends('layouts.app')

@section('title', 'Data Sarpras')

@section('content')

<div class="container">
    <a href="/sarprasS" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form id="sarpraForm" action="{{ route ('sarprasS.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @error('judul')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul">
                </div>

                @error('jumlah')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" placeholder="Jumlah">
                </div>
                
                @error('deskripsi')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi"></textarea>
                </div>
                 
                 @error('image')
                <small style="color: red">{{$message}}</small>   
                @enderror
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
                    document.getElementById('sarpraForm').submit();
                }
            });
        });
    });
</script>

@endsection

@section('head')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
