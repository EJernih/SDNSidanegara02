@extends('layouts.app')

@section('title', 'Data Tenaga Pendidik')

@section('content')

<div class="container">
    <a href="/tendiks" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form id="tendikForm" action="{{ route ('tendiks.update', $tendik->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                @error('nama')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{$tendik->nama}}">
                </div>
                
                @error('pelajaran')
                <small style="color: red">{{$message}}</small>   
                @enderror

                <div class="form-group">
                    <label for="">Mata Pelajaran Yang Diampuh</label>
                    <textarea name="pelajaran" id="" cols="30" rows="10" class="form-control" placeholder="Pelajaran">{{$tendik->pelajaran}}</textarea>
                </div>
                 
                 @error('image')
                <small style="color: red">{{$message}}</small>   
                @enderror
                <img src="/image/tendik/{{$tendik->image}}" alt="" class="img-fluid">
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
                    document.getElementById('tendikForm').submit();
                }
            });
        });
    });
</script>

@endsection

@section('head')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection