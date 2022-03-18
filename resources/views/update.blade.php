@extends('app.main')

@section('container')

@if ($errors->any())
    <div class="container-fluid">
        <div class="row mt-4 mb-2 fw-bold fs-4 justify-content-center">
            <div class="col-md-10">
                <div class="alert-danger text-center">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-4 mt-2">
            <div class="ml-1">
                <a href="{{ route('Books.index') }}" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Kembali</a>
            </div>
        </div>
    </div>
</div>

<form action="{{ url('Books', $books->id) }}" method="POST">
  @method('PUT')
    @csrf
    
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="mb-3">
                    <label for="judul" class="form-label fw-bold">Judul</label>
                    <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" name="judul" value="{{ $books->judul }}">
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label fw-bold">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ $books->author }}">
                </div>
                <div class="mb-3">
                    <label for="sinopsis" class="form-label fw-bold">Sinopsis</label>
                    <input type="text" class="form-control" id="sinopsis" aria-describedby="emailHelp" name="sinopsis" value="{{ $books->sinopsis }}">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label fw-bold">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" aria-describedby="emailHelp" name="penerbit" value="{{ $books->penerbit }}">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label fw-bold">Gambar Cover Buku</label>
                    <input type="hidden" name="old_cover" value="{{ $books->cover_buku }}">
                    <input type="file" class="form-control" id="image" name="cover_buku">
                </div>
                <div class="mb-3">
                    <label for="isi_buku" class="form-label fw-bold">Isi Buku</label>
                    <input type="hidden" class="form-control" id="isi_buku" name="isi_buku" value="{{ $books->isi_buku }}">
                    <trix-editor input="isi_buku"></trix-editor>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>   
</form>
@endsection