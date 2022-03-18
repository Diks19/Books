@extends('app.main')

@section('container')
@if (session('success'))
    <div class="container-fluid">
        <div class="row mt-4 mb-2 fw-bold fs-4 justify-content-center">
            <div class="col-md-10">
                <div class="alert-success text-center">
                    <p>{{ session('success') }}</p>
                </div>
            </div>
        </div>
    </div>
@endif

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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-center mt-5 mb-5">
                    <h1>Books Galery</h1>
                </div>
                <table class="table table-hover table-borderless mt-5">
                    <thead>
                        <a href="{{ route('Books.create') }}" class="btn btn-success">Tambah Buku</a>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Author</th>
                        <th scope="col">Sinopsis</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($books as $book)
                        <tr>
                          <th scope="row">{{ $i++ }}</th>
                          <td>{{ $book->judul }}</td>
                          <td>{{ $book->author }}</td>
                          <td>{{ $book->sinopsis }}</td>
                          <td>{{ $book->penerbit }}</td>
                          <td>
                              <a href="{{ url('Books', $book->id) }}"" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                              <a href="Books/{{ $book->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>

                                <form action="{{ url('Books', $book->id) }}" method="post" class="d-inline"> 
                                    @method('Delete')
                                    @csrf
                                    <button class="btn btn-danger" onclick="confirm('Apa kamu yakin?')"><i class="bi bi-trash"></i></button>
                                </form>
                          
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>        
            </div>
        </div>
    </div>
</div>



@endsection
