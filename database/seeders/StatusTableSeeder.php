<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            ['status_name' => 'pending'],
            ['status_name' => 'approved'],
            ['status_name' => 'rejected'],
        ]);
    }
}
