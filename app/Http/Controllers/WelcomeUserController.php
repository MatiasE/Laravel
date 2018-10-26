<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    // Codigo aqui.
    public function index($name, $nickname = null){
        $name_1 = ucfirst($name);
        if($nickname){
            return "Bienvenido {$name_1}, tu apodo es {$nickname}";
        } else {
            return "Bienvenido {$name_1}, no tienes apodo";
        }
    }
}
