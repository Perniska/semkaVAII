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
        $interpret3 = Interpret::where('name', 'Elán')->first();
        $interpret4 = Interpret::where('name', 'Aleš Brichta')->first();
        $interpret5 = Interpret::where('name', 'Harlej')->first();
        $interpret6 = Interpret::where('name', 'Wanastowi Vjecy')->first();

        Song::create([
            'interpret_id' => $interpret1->id,
            'title' => 'Chci zas v tobě spát',
            'lyrics' => 'lyrics/Chci zas v tobě spát.txt', // Cesta k súboru
        ]);

        Song::create([
            'interpret_id' => $interpret1->id,
            'title' => 'Medvídek',
            'lyrics' => 'lyrics/Medvídek.txt', // Cesta k súboru
        ]);

        Song::create([
            'interpret_id' => $interpret2->id,
            'title' => 'Pohoda',
            'lyrics' => 'lyrics/Pohoda.txt', // Cesta k súboru
        ]);

        Song::create([
            'interpret_id' => $interpret2->id,
            'title' => 'Colorado',
            'lyrics' => 'lyrics/Colorado.txt', // Cesta k súboru
        ]);

        Song::create([
            'interpret_id' => $interpret2->id,
            'title' => 'Western Boogie',
            'lyrics' => 'lyrics/Western Boogie.txt', // Cesta k súboru
        ]);

        Song::create([
            'interpret_id' => $interpret2->id,
            'title' => 'Šaman',
            'lyrics' => 'lyrics/Šaman.txt', // Cesta k súboru
        ]);


        Song::create([
            'interpret_id' => $interpret3->id,
            'title' => 'Neviem byť sám',
            'lyrics' => 'lyrics/Neviem byť sám.txt', // Cesta k súboru
        ]);

        Song::create([
            'interpret_id' => $interpret4->id,
            'title' => 'Nechte vlajky vlát',
            'lyrics' => 'lyrics/Nechte vlajky vlát.txt', // Cesta k súboru
        ]);

        Song::create([
            'interpret_id' => $interpret5->id,
            'title' => 'Přirození',
            'lyrics' => 'lyrics/Přirození.txt', // Cesta k súboru
        ]);

        Song::create([
            'interpret_id' => $interpret6->id,
            'title' => 'Otevřená zlomenina srdečního svalu',
            'lyrics' => 'lyrics/Otevřená zlomenina srdečního svalu.txt', // Cesta k súboru
        ]);


    }
}
