<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bedroom;

class BedroomType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bedroom::insert([
            'name' => 'superior',
        ]);

        Bedroom::insert([
            'name' => 'deluxe',
        ]);

        Bedroom::insert([
            'name' => 'basic',
        ]);
    }
}
