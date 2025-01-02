@extends('layouts.app')

@section('title', 'Data Galeri')

@section('content')

<div class="container">
    <a href="/galeris/create" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Tambah Data</a>
    
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
                    <th>Filter</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($galeris->sortBy('id') as $galeri)  {{-- Ubah sortByDescending menjadi sortBy --}}
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $galeri->title }}</td>
                        <td>
                            @if ($galeri->filter)
                                {{ $galeri->filter->filter }}
                            @else
                                Tidak Ada Filter
                            @endif
                        </td>
                        <td>
                            <img src="/image/galeri/{{$galeri->image}}" alt="" class="img-fluid" width="90">
                        </td>
                        <td>
                            <a href="{{route('galeris.edit', $galeri->id)}}" class="btn btn-warning"> <i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <form id="deleteForm{{$galeri->id}}" action="{{route('galeris.destroy', $galeri->id)}}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="confirmDelete({{$galeri->id}})"><i class="fa-solid fa-trash"></i> Hapus</button>
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
    function confirmDelete(galeriId) {
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
                document.getElementById('deleteForm' + galeriId).submit();
            }
        });
    }
</script>

@endsection

