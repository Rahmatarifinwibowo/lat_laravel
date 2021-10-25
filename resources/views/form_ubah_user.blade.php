@extends('layouts.app')
@section('content')

<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
           <h3> Edit User</h3>
        </div>
        <div class="card-body">
    <a href="{{route('user.index')}}" class="btn btn-warning">Kembali</a>
    <form action="{{route('user.update', $user->id)}}" method="POST">
        @csrf
        @method('PUT')
    <ul class="list-group">
        Nama <input type="text" name="name" required value="{{$user->name}}">
        Email<input type="email" name="email" required value="{{$user->email}}">
        Role<input type="text" name="role" required value="{{$user->role}}" readonly>
    </ul>
    <input type="submit" name="Simpan" class="btn btn-info">
    </form>
    </div>
</div>
</div>
@endsection
