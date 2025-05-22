<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Faker = Faker::create('id_ID');

        for($i=0;$i<100;$i++){
            DB::table('user')->insert([
                'nik' => $Faker->numberBetween(10000,99999),
                'nama' => $Faker->name,
                'username' => $Faker->email,
                'password' => $Faker->password
            ]);
        }
    }
}
