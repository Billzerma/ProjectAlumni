<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataAlumniFakerSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
 
		for ($i = 0; $i < 100; $i++) {
			$jk = $faker->randomElement(['pria', 'wanita']);

			if ($jk == "pria") {
				$gender = "male";
			} else {
				$gender = "female";
			}

			$data = [
				'nama' => $faker->name($gender),
				'alamat' => $faker->address,
                'phone' => $faker->phoneNumber,
                'tahunlulus'=> $faker->date('Y-m-d', 'now'),
                
			];

			$this->db->table('dataalumni')->insert($data);
		}
    }
}
