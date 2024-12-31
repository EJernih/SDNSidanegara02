@extends('layouts.app')

@section('title', 'Data Visi Misi')

@section('content')

<div class="container">
    <a href="/visimisis/create" class="btn btn-primary mb-3">Tambah Data</a>
    
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
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($visimisis->sortBy('id') as $visimisi)  {{-- Ubah sortByDescending menjadi sortBy --}}
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $visimisi->visi }}</td>
                        <td>{{ $visimisi->misi }}</td>

                        <td>
                            <a href="{{route('visimisis.edit', $visimisi->id)}}" class="btn btn-warning">Edit</a>
                            <form id="deleteForm{{$visimisi->id}}" action="{{route('visimisis.destroy', $visimisi->id)}}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="confirmDelete({{$visimisi->id}})">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    // Fungsi untuk konfirmasi penghapusan
    function confirmDelete(visimisiId) {
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
                // Jika pengguna mengonfirmasi, submit form
                document.getElementById('deleteForm' + visimisiId).submit();
            }
        });
    }
</script>

@endsection
