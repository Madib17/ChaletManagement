<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(BedType::class);
        $this->call(BedroomType::class);
        $this->call(DummyReview::class);
        $this->call(ReportTitle::class);
    }
}
