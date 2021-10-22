<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body><!-- NAVIGASI-->
    <!--<nav class="navbar navbar-expand bg-dark">
        <ul class="nav">
            <li>
                <a class="nav-link" href="{{url('/beranda')}}">Home </a></li>
                <li>
                <a class="nav-link" href="{{url('/datasiswa')}}">Data Siswa </a>
            </li>
                <li><a class="nav-link" href="{{url('/menukegiatan')}}">Menu Kegiatan </a>
            </li>
        </ul>
</nav>-->
@extends('layouts.app')
@section('content')
        <div class="jumbotron text-center">
        <h1>Portal Informasi Siswa</h1>
        <p>Selamat datang di Portal Informasi</p>
        <a href="#" class="btn btn-dark">Menu Kegiatan</a>
        <a href="#" class="btn btn-primary">Data Siswa</a>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>