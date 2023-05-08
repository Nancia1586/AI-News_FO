<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auteur;
use Illuminate\Support\Facades\Session;

class AuteurController extends Controller
{
    public function loginform()
    {
        return view('back_office.login');
    }

    public function traitementlogin(Request $request)
    {
        $email = request('email');
        $mdp = request('mdp');
        $idauteur = Auteur::login($email, $mdp);
        if($idauteur == -1){
            return view('back_office.login',
            [
                'error' => 'Email ou mot de passe incorrect'
            ]);
        }
        // Session::put('idauteur', $idauteur);
        $request->session()->put('idauteur', $idauteur);
        return redirect('/information/list');
    }

    public function home(){
        return view('admin.home');
    }
}
