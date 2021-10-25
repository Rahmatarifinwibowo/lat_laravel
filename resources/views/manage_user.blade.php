@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
           <h3> Manajemen User</h3>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Nama</th>
                        <th>email</th>
                        <th>role</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($user as $u)
                    <tr>
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>
                        <td>{{$u->role}}</td>
                        <td>
                            <ul class="nav">
                                <a href="{{route('user.edit',$u->id)}}" class="btn btn-primary mr-2">Edit</a>
                                <form action="{{route('user.destroy',$u->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
            @endsection
