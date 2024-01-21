<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Interpret;

class InterpretSeeder extends Seeder
{
    public function run()
    {
        Interpret::create(['name' => 'Lucie']);
        Interpret::create(['name' => 'Kabát']);
        // pridajte ďalších interpretov podľa potreby
    }
}
