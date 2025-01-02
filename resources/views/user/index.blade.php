@extends('layouts.app')

@section('title', 'Data user')

@section('content')

<div class="container">
    @can('create-user')
    <a href="/users/create" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Tambah Data</a>
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
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($users->sortBy('id') as $user)  {{-- Ubah sortByDescending menjadi sortBy --}}
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>

                        <td>
                            @can('edit-user')
                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            @endcan

                            @can('delete-user')     
                            <form id="deleteForm{{$user->id}}" action="{{route('users.destroy', $user->id)}}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="confirmDelete({{$user->id}})"><i class="fa-solid fa-trash"></i> Hapus</button>
                            </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    // Fungsi untuk konfirmasi penghapusan
    function confirmDelete(userId) {
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
                document.getElementById('deleteForm' + userId).submit();
            }
        });
    }
</script>

@endsection
