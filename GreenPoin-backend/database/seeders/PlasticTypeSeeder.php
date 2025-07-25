<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlasticType;

class PlasticTypeSeeder extends Seeder
{
    public function run(): void
    {
        PlasticType::insert([
            ['name' => 'PET'],
            ['name' => 'HDPE'],
            ['name' => 'LDPE'],
        ]);
    }
}
