@extends('layouts.app')

@section('title', 'Data Slider')

@section('content')

<div class="container">
    @can('create-tulisan')
    <a href="/sliders/create" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Tambah Data</a>
    @endcan
    
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
                @foreach ($sliders->sortBy('id') as $slider)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $slider->title }}</td>
                        <td>{{ $slider->description }}</td>
                        <td>
                            <img src="/image/slider/{{$slider->image}}" alt="" class="img-fluid" width="90">
                        </td>
                        <td>
                            <a href="{{route('sliders.edit', $slider->id)}}" class="btn btn-warning me-2 mb-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <form id="deleteForm{{$slider->id}}" action="{{route('sliders.destroy', $slider->id)}}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="confirmDelete({{$slider->id}})"><i class="fa-solid fa-trash"></i> Hapus</button>
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
    function confirmDelete(sliderId) {
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
                document.getElementById('deleteForm' + sliderId).submit();
            }
        });
    }
</script>

@endsection
