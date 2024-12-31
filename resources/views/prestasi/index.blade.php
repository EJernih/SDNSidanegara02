@extends('layouts.app')

@section('title', 'Data Prestasi')

@section('content')

<div class="container">
    <a href="/prestasis/create" class="btn btn-primary mb-3">Tambah Data</a>
    
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
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($prestasis->sortBy('id') as $prestasi)  {{-- Ubah sortByDescending menjadi sortBy --}}
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $prestasi->title }}</td>
                        <td>{{ $prestasi->date }}</td>
                        <td>{{ $prestasi->description }}</td>
                        <td>
                            <img src="/image/prestasi/{{$prestasi->image}}" alt="" class="img-fluid" width="90">
                        </td>
                        <td>
                            <a href="{{route('prestasis.edit', $prestasi->id)}}" class="btn btn-warning">Edit</a>
                            <form id="deleteForm{{$prestasi->id}}" action="{{route('prestasis.destroy', $prestasi->id)}}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="confirmDelete({{$prestasi->id}})">Hapus</button>
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
    function confirmDelete(prestasiId) {
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
                document.getElementById('deleteForm' + prestasiId).submit();
            }
        });
    }
</script>

@endsection
