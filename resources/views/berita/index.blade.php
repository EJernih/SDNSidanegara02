@extends('layouts.app')

@section('title', 'Data Berita')

@section('content')

<div class="container">
    <a href="/beritas/create" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Tambah Data</a>
    
    @if ($message = Session::get('message'))
      <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{$message}}</p>
    </div>  
    @endif
    
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($beritas->sortBy('id') as $berita)  {{-- Ubah sortByDescending menjadi sortBy --}}
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $berita->title }}</td>
                        <td>{{ Str::limit($berita->description, 25) }}</td>
                        <td>
                            <img src="/image/berita/{{$berita->image}}" alt="" class="img-fluid" width="90">
                        </td>
                        <td>
                            <a href="{{ route('beritas.show', $berita->id) }}" class="btn btn-info"><i class="fa-solid fa-eye"></i> Baca Selengkapnya</a>
                            <a href="{{route('beritas.edit', $berita->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <form class="delete-form" action="{{route('beritas.destroy', $berita->id)}}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger delete-button"><i class="fa-solid fa-trash"></i> Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Initialize EasyMDE
        new EasyMDE({ element: document.querySelector("textarea[name='description']") });

        // SweetAlert2 for Delete Confirmation
        const deleteButtons = document.querySelectorAll('.delete-button');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                const form = this.closest('.delete-form'); // Get the closest form

                // Show SweetAlert confirmation dialog
                Swal.fire({
                    title: 'Apakah Anda yakin ingin menghapus data ini?',
                    text: "Data yang dihapus tidak bisa dikembalikan.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Submit the form if confirmed
                    }
                });
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
