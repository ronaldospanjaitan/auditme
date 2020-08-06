<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'firstName' => 'Ronaldo',
        	'lastName' => 'Panjaitan',
        	'email' => 'aldopanjaitan23@gmail.com',
            'companyName' => 'PT ISM Consulting,Tbk',
            'companyAddress' => 'Jl. Telekomunikasi No.1',
            'password' => '12345',
            'isRegister' => 0
        ]);
    }
}
