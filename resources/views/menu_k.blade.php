<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Kegiatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<!--<body><nav class="navbar navbar-expand bg-dark">
        <ul class="nav">
            <li>
                <a class="nav-link" href="{{url('/beranda')}}">Home </a></li>
                <li>
                <a class="nav-link" href="{{url('/datasiswa')}}">Data Siswa </a>
            </li>
                <li><a class="nav-link" href="{{url('/menukegiatan')}}">Menu Kegiatan </a>
            </li>
        </ul>
</nav>-->@extends('layouts.app')
@section('content')
<h3> Info Kegiatan</h3>
<p>Informasi Kegiatan Siswa Baru Tahun Ajaran 2007-2008</p>
<ul>
    <li>10 Agustus - Masa Orientasi Siswa</li>
    <li>17 Agustus - Upacara Bendera Merah Putih </li>
</ul>
<p> Informasi Kegiatan Siswa Bulan September</p>
<ul>
    <li> 09 September - Merayakan Ulang tahun Kepala Sekolah </li>
    <li> 12 September - Ujian Tengah Semester </li>
</ul>
 @endsection   
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>