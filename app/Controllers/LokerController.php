<?php

namespace App\Controllers;



class LokerController extends BaseController
{
    public function halamanLoker()
    {
         return view('Alumni/loker');
        
    }

    public function postingLoker()
    {
         return view('user\postingLoker');
        
    }

}