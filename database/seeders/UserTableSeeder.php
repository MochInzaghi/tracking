<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Admin Surat',
            'username' => 'adminsurat',
            'password' => bcrypt('password'),
            'email' => 'adminsurat@gmail.com',
        ]);
    }
}
