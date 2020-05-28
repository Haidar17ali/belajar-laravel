@extends('layout/main')

@section('title', 'Detail Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h3 class="mt-3">Detail Mahasiswa</h3>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->nim}}</h6>
                    <p class="card-text">{{ $student->email }}</p>
                    <p class="card-text">{{ $student->jurusan }}</p>
                    <a href="/mahasiswa" class="btn btn-primary">Kembali</a>
                    <a href="{{$student->id}}/edit" class="btn btn-success">Edit</a>
                    <form action="{{$student->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection