@extends('layouts.app')

@section('title', $berita->title)

@section('content')
<div class="container">
    <h1>{{ $berita->title }}</h1>
    <img src="/image/berita/{{ $berita->image }}" alt="{{ $berita->title }}" class="img-fluid mb-3">
    <p>{{ $berita->description }}</p>
    <a href="{{ route('beritas.index') }}" class="btn btn-secondary">Kembali ke Daftar Berita</a>
</div>
@endsection
