<?php

namespace App\Controllers;
use App\Models\DataAlumni;

class AlumniController extends BaseController
{
    public function index()
    {
         return view('Alumni/landing');
        
    }

    public function dash()
    {
         return view('Alumni/tamplate/header');
        
    }
    public function cariAlumni()
    {
     $cari = new DataAlumni;
     $data['cari'] = $cari->orderBy('nama', 'asc')->findAll();
     echo view('Alumni/cari', $data);
        
    }
    public function login()
    {
     
          return view('Alumni/login');
    }
    public function register()
    {
     
          return view('Alumni/register');
    }
 
    
}
