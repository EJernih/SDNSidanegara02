@extends('layouts.app')

@section('title', 'Data Sarpras')

@section('content')

<div class="container">
    <a href="/sarprasS/create" class="btn btn-primary mb-3">Tambah Data</a>
    
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
                    <th>Jumlah</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($sarpras->sortBy('id') as $sarpra)  {{-- Ubah sortByDescending menjadi sortBy --}}
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $sarpra->judul }}</td>
                        <td>{{ $sarpra->jumlah }}</td>
                        <td>{{ $sarpra->deskripsi }}</td>
                        <td>
                            <img src="/image/sarpras/{{$sarpra->image}}" alt="" class="img-fluid" width="90">
                        </td>
                        <td>
                            <a href="{{route('sarprasS.edit', $sarpra->id)}}" class="btn btn-warning">Edit</a>
                            <form id="deleteForm{{$sarpra->id}}" action="{{route('sarprasS.destroy', $sarpra->id)}}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="confirmDelete({{$sarpra->id}})">Hapus</button>
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
    function confirmDelete(sarpraId) {
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
                document.getElementById('deleteForm' + sarpraId).submit();
            }
        });
    }
</script>

@endsection
