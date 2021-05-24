<?php

namespace Database\Seeders;

use App\Models\Title;
use Illuminate\Database\Seeder;

class ReportTitle extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Title::insert([
           'title' => 'sexual assault',
       ]);

       Title::insert([
        'title' => 'false information',
    ]);

    Title::insert([
        'title' => 'racism',
    ]);
    }
}
