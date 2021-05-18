<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Adib Rahim',
            'email' => 'adib.rahim07@gmail.com',
            'password' => Hash::make('adib.rahim07@gmail.com'),
        ]);
    }
}
