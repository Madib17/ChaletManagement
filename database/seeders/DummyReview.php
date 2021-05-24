<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class DummyReview extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::insert([
            'name' => 'Ahmad',
            'detail' => 'Booooo, youre a piece of garbage',
            'email' => 'ahmad@gmam.com',
            'point' => '1',
            'chalet_id' => '1'
        ]);
    }
}
