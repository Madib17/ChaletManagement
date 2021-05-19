<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bed;

class BedType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bed::insert([
            'name' => 'single bed',
        ]);

        Bed::insert([
            'name' => 'semi double-bed',
        ]);

        Bed::insert([
            'name' => 'double bed',
        ]);

        Bed::insert([
            'name' => 'queen bed',
        ]);

        Bed::insert([
            'name' => 'king bed',
        ]);

        Bed::insert([
            'name' => 'super king bed',
        ]);

        Bed::insert([
            'name' => 'bunk bed',
        ]);

        Bed::insert([
            'name' => 'sofa bed',
        ]);

        Bed::insert([
            'name' => 'futon',
        ]);


    }
}
