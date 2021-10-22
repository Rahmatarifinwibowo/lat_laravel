<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    function home()
    {
        return view('beranda');
    }
    public function menu_kegiatan()
    {
        return view('menu_k');
    }
    public function data_siswa()
    {
        return view('data_sis');
    }
}
