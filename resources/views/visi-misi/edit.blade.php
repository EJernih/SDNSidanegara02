@extends('layouts.app')

@section('title', 'Data Visi Misi')

@section('content')

<div class="container">
    <a href="/visimisis" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form id="visimisisForm" action="{{ route ('visimisis.update', $visimisi->id) }}" method="POST" enctype="multipart/form-data">
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
                    document.getElementById('visimisisForm').submit();
                }
            });
        });
    });
</script>

@endsection

@section('head')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection