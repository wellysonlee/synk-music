<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers; // Importe da trait AuthenticatesUsers

class LoginController extends Controller
{
    use AuthenticatesUsers; // Use a trait AuthenticatesUsers

    // Outros métodos do controlador, como showLoginForm(), login(), logout(), etc.
}


