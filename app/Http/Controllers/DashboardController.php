<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Affichage de la page dashboard
     * 
     * @return Renderable
     */
    public function show()
    {
        return view('dashboard.dashboard');
    }
}
