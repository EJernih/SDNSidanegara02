@extends('layouts.app')

@section('title', 'Data User')

@section('content')

<div class="container">
    <a href="/users" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form id="userForm" action="{{ route ('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @error('name')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                
                @error('email')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                 
                @error('password')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="">password_confirmation</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="password_confirmation">
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
                    document.getElementById('userForm').submit();
                }
            });
        });
    });
</script>

@endsection

@section('head')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
