<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumniModel extends Model
{
    protected $table = 'profile';
    protected $useTimeStamps = true;
    protected $allowedFields = ['id_profile', 'tahun_lulus', 'sampul_profile', 'nama', 'job', 'summary', 'facebook', 'instagram', 'email', 'share_contact', 'sma', 's1', 's2', 's3'];

    public function search($keyword)
    {
        return $this->table('profile')->like('tahun_lulus', $keyword);
    }

}