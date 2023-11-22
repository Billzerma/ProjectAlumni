<?php

namespace App\Models;

use CodeIgniter\Model;

class LokerModel extends Model
{
    protected $table = 'loker';
    protected $useTimeStamps = true;
    protected $dateFormat = 'datetime';
    protected $allowedFields = ['judul_loker','deskripsi_loker','spesifikasi','contact_person','alamat','sampul_loker']; 
    
    
  
}