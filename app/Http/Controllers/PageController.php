<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'NIM: 2241720153<br>
        Nama: Amanda Vanika Putri';
    }
    public function articles($id) {
        return 'Halaman Artikel dengan ID '.$id;
    }

}
