<?php

namespace App\Controllers;



class BeritaController extends BaseController
{
    public function halamanBerita()
    {
         return view('Alumni/berita');
        
    }


    public function postingBerita()
    {
         return view('user\postingBerita');
        
    }


}