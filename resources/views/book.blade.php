@extends('app.main')

@section('container')
  <div class="container">
    <div class="col-lg-4">
      <a href="{{ route('Books.index') }}" class="btn btn-dark mt-2"><i class="bi bi-arrow-left"></i> kembali ke list buku</a>
    </div>
  </div>
  <div class="container">
    <div class="row mb-3 d-flex justify-content-center">
      <div class="col-lg-8">
        <h1 class="mb-2">{{ $books->judul }}</h1>
        <p class="fs-5">Author : {{ $books->author }}</p>
        <p class="fs-5">Penerbit : {{ $books->penerbit }}</p>

        <a href="{{ $books->id }}/edit" class="btn btn-warning mb-3">Edit Buku</a>
        <form action="{{ url('Books', $books->id) }}" method="post" class="d-inline"> 
          @method('Delete')
          @csrf
          <button class="btn btn-danger mb-3" onclick="confirm('Apa kamu yakin?')"><i class="bi bi-trash"></i> Hapus Buku</button>
      </form>

        @if ($books->cover_buku)
            <div style="max-height: 300px; overflow: hidden" class="rounded">
              <img src="{{ asset('storage/' . $books->cover_buku) }}" alt="Cover Buku">
            </div>
        @else
            <img src="https://source.unsplash.com.1200x400?book" alt="">
        @endif

        <article class="my-3 fs-5">
          {!! $books->isi_buku !!}
        </article>
      </div>
    </div>
  </div>

@endsection