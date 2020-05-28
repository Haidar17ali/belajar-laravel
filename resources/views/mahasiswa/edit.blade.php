@extends('layout/main')

@section('title', "Edit Mahasiswa")

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <form class="p-3" action="/mahasiswa/{{$student->id}}" method="POST">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Masukkan nama...." value="{{$student->nama}}">
                    <span class="text-danger" id="namaError"></span>
                </div>
                <div class="form-group">
                    <label for="nim">Nim</label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan nim...." value="{{$student->nim}}">
                    <span class="text-danger" id="nimError"></span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email...." value="{{$student->email}}">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan jurusan...." value="{{$student->jurusan}}">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection