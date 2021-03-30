<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'IGN Admin',
            'email' => 'admin@internationalglobalnetwork.com',
            'password' => Hash::make('admin@123!'),
            'type' => 1,
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
