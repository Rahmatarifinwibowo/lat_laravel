<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
DATA SISWA
<table class="table-bordered table-striped">
    <tr>
        <th>Nama</th>
        <th>Nis</th>
        <th>Tanggal Lahir</th>
</tr>
<tr>
    <td>Sucipto</td>
    <td>10220 </td>
    <td>29 Agustus 2009</td>
</tr>
<tr>
    <td>malin</td>
    <td>10221</td>
    <td>30 agustus 2009</td>
</tr>
</table>
@endsection    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>