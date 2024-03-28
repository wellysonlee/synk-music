<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function showHomePage()
    {
        return view('auth.home'); // Retorna a view home.blade.php localizada em resources/views/auth
    }
}
