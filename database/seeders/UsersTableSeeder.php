<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            //admin
            [
                'name' =>  'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345'),
                'level' => 'admin',
            ],

            //perusahaan
            // [
            //     'name' =>  'PT honda',
            //     'email' => 'perusahaan@gmail.com',
            //     'password' => Hash::make('password'),
            //     'level' => 'perusahaan',
            // ],

            // //pelamar
            // [
            //     'name' =>  'ganteng',
            //     'email' => 'pelamar@gmail.com',
            //     'password' => Hash::make('password'),
            //     'level' => 'pelamar',
            // ]
        ]);
    }
}
