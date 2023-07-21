<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
   
    protected $allowedFields = ['isi_berita','judul_berita','sampul_berita','headline']; 

    public function getBerita($id_berita = false){
        if($id_berita == false){
            return $this->findAll();
        }

        return $this->where(['id_berita' => $id_berita])->first();
    }
    
    
  
}