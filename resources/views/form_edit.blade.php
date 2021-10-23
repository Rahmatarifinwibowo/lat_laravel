@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Edit Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{route('siswa.index')}}" class="btn btn-warning">Kembali</a>
            <form action="{{route('siswa.update', $siswa->id)}}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama<input type="text" name="nama" required value="{{$siswa->nama}}">
                    NIS<input type="integer" name="nik" required value="{{$siswa->nik}}">
                    Tgl Lahir<input type="date" name="tgl_lahir" required value="{{$siswa->tgl_lair}}">
                </ul>
                <input type="submit" value="Ubah Data" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection