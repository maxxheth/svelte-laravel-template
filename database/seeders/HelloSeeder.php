<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hello;

class HelloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 50 records using the HelloFactory
        Hello::factory()->count(50)->create();
    }
}