<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers; // Importe da trait AuthenticatesUsers

class LoginController extends Controller
{
    use AuthenticatesUsers; // Use a trait AuthenticatesUsers

        /**
     * Get the post login redirect path.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectPath(Request $request)
    {
        // Verifica se há um parâmetro "intended" na sessão
        if ($request->session()->has('url.intended')) {
            return $request->session()->get('url.intended');
        }

        // Caso contrário, redireciona para a página inicial
        return '/home';
    }
}




