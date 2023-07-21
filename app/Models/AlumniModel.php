<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumniModel extends Model
{
    protected $table = 'profile';
    protected $useTimeStamps = true;
    protected $allowedFields = ['user_id', 'nama', 'job', 'summary', 'facebook', 'instagram', 'email', 'share_contact', 'sma', 's1', 's2', 's3'];

 
  
    
 
  
}