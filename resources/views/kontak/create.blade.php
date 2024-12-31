@extends('layouts.app')

@section('title', 'Data Kontak')

@section('content')

<div class="container">
    <a href="/kontaks" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form id="kontakForm" action="{{ route ('kontaks.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @error('phone')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Telephone">
                </div>
                
                @error('email')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                 
                @error('address')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="address" id="" cols="30" rows="10" class="form-control" placeholder="Alamat"></textarea>
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
                title: 'Yakin ingin menyimpan data?',
                text: "Data yang sudah dimasukkan akan disimpan.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Simpan',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna mengonfirmasi, submit form
                    document.getElementById('kontakForm').submit();
                }
            });
        });
    });
</script>

@endsection

@section('head')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
