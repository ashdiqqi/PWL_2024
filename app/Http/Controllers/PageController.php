<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function welcome() {
        return 'Selamat Datang';
       }

    public function about() {
        return '2241720138 <br> Fatriya Ibnu Ash shidiqqi';
       }

       public function articles($id) {
        return 'Halaman Artikel ke - '.$id;
       }
}
