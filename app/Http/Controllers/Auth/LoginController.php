<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Affichage de la page login
     * 
     * @return Renderable
     */
    public function show()
    {
        return view('auth.login');
    }

    /**
     * Traitement de la demande de connexion
     * 
     */
    public function login()
    {
        
    }

    /**
     * Traitement après la connexion
     */
    protected function authenticated(Request $request, $user) 
    {
        return redirect('/');
    }
}
