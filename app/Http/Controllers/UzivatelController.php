<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Uzivatel;
use App\Models\Comment;
use Illuminate\Routing\Controller;

class UzivatelController extends Controller

{


    public function update(Request $request ,Uzivatel $uzivatel){
        $uzivatel->update([
            'meno' => $request->input('meno'),
            'heslo' => $request->input('heslo'),
        ]);
        $request->session()->flash('uzivatel', $uzivatel);
        return redirect()->back();
    }



    public function destroy(Uzivatel $uzivatel){
        $uzivatel->delete();
        return redirect(route('uzivatel.create'))->with('success', 'Užívateľ je vymazaný');
    }

    public function login()
    {
       return view ("uzivatelia.prihlasenie_po_r");
    }
    public function registration()
    {
        return view ("uzivatelia.registracia");
    }

    public function registerUser(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'meno'=> '',
            'heslo' => 'required|min:8'
        ]);

        $data['meno'] = $request->input('meno', 'user');

        $newUzivatel = Uzivatel::create($data);

        if($newUzivatel)
        {
            return back()->with('success', 'Zaregistrovali ste sa');
        } else {
            return back()->with('fail', 'Ta ša niečo dodrbalo');
        }


    }

    public function loginUser(Request $request) {

        $data = $request->validate([
            'email' => 'required|email',
            'heslo' => 'required|min:8'
        ]);

        $user = Uzivatel::where('email','=',$request->email)->first();

        if($user) {
            if(Hash::check($request->heslo,$user->heslo)){
               $request->session()->put('uzivatel', $user);
                return view('domov',['uzivatel' => $user]);

            }else {
                return back()->with('fail', 'Ta ša niečo dodrbalo a ty niesi zaregistrovany , poleno...heslo je napiač');
            }
        }else {
            return back()->with('fail', 'Ta ša niečo dodrbalo a ty niesi zaregistrovany , poleno');
        }
    }


    public function logout(){
        if(session()->has('uzivatel')) {
            session()->pull('uzivatel');
        }
        return view('domov');
    }


}
