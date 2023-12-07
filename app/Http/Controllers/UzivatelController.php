<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uzivatel;
use Illuminate\Routing\Controller;

class UzivatelController extends Controller

{
    public function index(Uzivatel $uzivatel)
    {
       return view('uzivatelia.index', ['uzivatel' => $uzivatel]);
    }

    public function create()
    {
        return view('uzivatelia.create');
    }



    public function store(Request $request){


        // Extract the relevant data from the request and validate
        $data = $request->validate([
            'email' => 'required|email',
            'meno'=> '',
            'heslo' => 'required|min:8'
        ]);

        $data['meno'] = $request->input('meno', 'user');

        $newUzivatel = Uzivatel::create($data);

        return redirect(route('uzivatel.edit',['uzivatel' => $newUzivatel]));

    }


    public function edit(Uzivatel $uzivatel)
    {
        return view('uzivatelia.edit', ['uzivatel' => $uzivatel]);
    }
    public function update(Request $request ,Uzivatel $uzivatel){

        $uzivatel->update(['meno' => $request->input('meno')]);
        return redirect(route('uzivatel.index', ['uzivatel' => $uzivatel]));
    }


    public function destroy(Request $request ,Uzivatel $uzivatel){
        $uzivatel->delete();
        return redirect(route('uzivatel.create'))->with('success', 'Užívateľ je vymazaný');
    }



}
