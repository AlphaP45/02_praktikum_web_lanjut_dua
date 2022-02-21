<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        return 'Selamat Datang';
    }

    public function nama(){
        return 'Nama : Alpha Pramadhani, NIM : 2041720045';
    }

    public function id($id){
        return "Halaman artikel dengan ID ".$id;
    }
}
