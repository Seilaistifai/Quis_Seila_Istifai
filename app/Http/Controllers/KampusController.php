<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KampusController extends Controller
{
    public function home()
    {
        return view('halaman.home');
    }

    public function tentang()
    {
        return view('halaman.tentang');
    }
}
