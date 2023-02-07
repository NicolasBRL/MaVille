<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
        if(!Auth::validate($credentials)):
            return redirect()->to('espace-admin')
                ->withErrors('Email ou mot de passe incorrect.');
        endif;
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    /**
     * Traitement après la connexion
     */
    protected function authenticated(Request $request, $user) 
    {
        return redirect('/');
    }
}
