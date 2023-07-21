<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at';
    protected $allowedFields = ['isi_berita','judul_berita','sampul_berita','headline']; 

    public function getBerita($id_berita = false){
        if($id_berita == false){
            return $this->findAll();
        }

        return $this->where(['id_berita' => $id_berita])->first();
    }
    
    
  
}