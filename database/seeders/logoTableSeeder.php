<?php

namespace Database\Seeders;

use App\Models\logo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class logoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        logo::factory()->count(10)->create();
    }
}
