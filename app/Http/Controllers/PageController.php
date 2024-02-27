<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return 'Lucky <br>2241720168';
    }
    public function articles($id)
    {
        return 'Halaman artikel dengan ID ' . $id;
    }
}
