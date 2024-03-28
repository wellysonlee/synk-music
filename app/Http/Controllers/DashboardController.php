<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Lógica para exibir o dashboard

        // Redirecionar para a página inicial (home page)
        return redirect()->route('home');
    }
}
