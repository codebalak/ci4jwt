<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class ClientSeeder extends Seeder
{
    public function run()
    {
        //

        for ($i=0; $i < 10 ; $i++) { 
            
            $this->db->table('client')->insert($this->generateClients());
        }

    }

    /*Auto generate*/

    public function generateClients()
    {
       $faker = Factory::create();
       return [

        'name'=>$faker->name(),
        'email'=>$faker->email,
        'retainer_fee'=> random_int(1000,99999)

       ];
    }
}
