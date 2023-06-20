<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'          =>  'Radahn',
                'jenis_kelamin' =>  'pria',
                'alamat'        =>  'Caelid',
                
            ],
            [
                'nama'          =>  'Praetor Rykard',
                'jenis_kelamin' =>  'pria',
                'alamat'        =>  'Mt.Gelmir',
                
            ]
        ];
        $this->db->table('Pegawai')->insertBatch($data);
    }
}
