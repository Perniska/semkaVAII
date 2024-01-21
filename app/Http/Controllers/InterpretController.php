<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Interpret;
use Illuminate\Support\Facades\Storage;

class InterpretController extends Controller
{
    public function store(Request $request)
    {
        $song = new Song;
        $song->title = $request->title;

        // Uloží súbor do priečinka 'lyrics' a získa cestu k súboru
        $lyricsPath = $request->file('lyrics')->store('lyrics');

        // Uloží cestu k súboru do databázy
        $song->lyrics = $lyricsPath;

        $song->save();

        return redirect()->route('songs.index');
    }

    public function show(Song $song)
    {
        // Načíta obsah súboru podľa cesty
        $lyrics = Storage::get($song->lyrics);

        return view('songs.show', compact('song', 'lyrics'));
    }

    public function novinky()
    {
        $interprets = Interpret::all();
        return view('novinky', compact('interprets'));
    }

    public function zoznamPiesni(Interpret $interpret)
    {
        $songs = $interpret->songs;
        return view('zoznam_piesni', compact('interpret', 'songs'));
    }

    public function zobrazPiesen(Interpret $interpret, Song $song)
    {
        $lyricsPath = public_path($song->lyrics);

        if (file_exists($lyricsPath)) {
            $lyrics = file_get_contents($lyricsPath);
            return view('zobraz_piesen', compact('interpret', 'song', 'lyrics'));
        } else {
            return view('zobraz_piesen', compact('interpret', 'song'))->withErrors('Súbor neexistuje.');
        }
    }

    public function exportSong(Interpret $interpret, Song $song)
    {
        $lyricsPath = public_path($song->lyrics);

        if (file_exists($lyricsPath)) {
            // Nastavíme názov súboru pre export
            $fileName = $song->title . '.txt';

            // Vytvoríme odpoveď so súborom pre export
            return response()->download($lyricsPath, $fileName);
        } else {
            return view('zobraz_piesen', compact('interpret', 'song'))->withErrors('Súbor neexistuje.');
        }
    }


}

