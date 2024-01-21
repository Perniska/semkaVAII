<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;
use App\Models\Interpret;
use Illuminate\Support\Facades\Storage;


class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $interpret1 = Interpret::where('name', 'Lucie')->first();
        $interpret2 = Interpret::where('name', 'Kabát')->first();

        Song::create([
            'interpret_id' => $interpret1->id,
            'title' => 'Chci zas v tobě spát',
            'lyrics' => 'lyrics/Chci zas v tobě spát.txt', // Cesta k súboru
        ]);

        Song::create([
            'interpret_id' => $interpret2->id,
            'title' => 'Pohoda',
            'lyrics' => 'lyrics/Pohoda.txt', // Cesta k súboru
        ]);



        // pridajte ďalšie piesne podľa potreby
    }
}
