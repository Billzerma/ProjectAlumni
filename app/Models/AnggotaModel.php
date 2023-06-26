<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota';
    protected $useTimeStamps = true;
    protected $allowedFields = ['nama', 'slug', 'no_anggota', 'hp', 'sampul'];

    public function getAnggota($slug = false)
    {
        if($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}