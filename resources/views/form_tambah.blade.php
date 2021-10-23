@extends('layouts.app')
@section('content')

<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Tambah Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{route('siswa.index')}}" class="btn btn-warning">Kembali</a>
            <form action="{{route('siswa.store')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Nama <input type="text" name="nama" required>
                    NIS <input type="integer" name="nik" required>
                    Tgl Lahir<input type="date" name="tgl_lahir" required>
                </ul>
                <input type="submit" class="btn btn-success" value="Simpan Data">
            </form>
        </div>
    </div>
</div>
@endsection