<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Uzivatel;
use App\Models\Comment;
use Illuminate\Routing\Controller;

class UzivatelController extends Controller

{
    public function index(Uzivatel $uzivatel)
    {
       return view('uzivatelia.index', ['uzivatel' => $uzivatel]);
    }

    public function create()
    {
        return view('uzivatelia.registracia');
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
        return view('uzivatelia.prihlasenie', ['uzivatel' => $uzivatel]);
    }

    public function prihlasenie()
    {
        return view('uzivatelia.prihlasenie');
    }

    public function update(Request $request ,Uzivatel $uzivatel){

        $uzivatel->update(['meno' => $request->input('meno')]);
        $uzivatel->update(['heslo' => $request->input('heslo')]);
       // return redirect(route('uzivatel.index', ['uzivatel' => $uzivatel]));
    }


    public function destroy(Request $request ,Uzivatel $uzivatel){
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
               // return redirect('dashboard');
            }else {
                return back()->with('fail', 'Ta ša niečo pototo a ty niesi zaregistrovany , poleno...heslo je naprd');
            }
        }else {
            return back()->with('fail', 'Ta ša niečo pototo a ty niesi zaregistrovany , poleno');
        }
    }

    public function dashboard(Uzivatel $uzivatel){
       // return view('uzivatelia.profil', ['uzivatel' => $uzivatel]);
    }

    public function logout(){
        if(session()->has('uzivatel')) {
            session()->pull('uzivatel');
        }
        return view('domov');
    }

}
