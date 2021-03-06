<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Christianus Yoga Wibisono',
            'email' => 'yogamusicus@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('sehatselalu11'),
            'is_admin' => true,
        ]);
    }
}
