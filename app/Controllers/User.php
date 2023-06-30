<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use App\Models\DataAlumni;

class User extends BaseController
{
    public function index()
    {
         return view('user/index');
        
    }

}