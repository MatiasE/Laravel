<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Codigo aqui.
    public function index(){
        if(request()->has('empty')) {
            $users = [];
        } else {
            $users = [
                "Joel",
                "Ellie",
                "Tess",
                "Tommy",
                "Bill",
            ];    
        }

        return view('users', [
            'users' => $users,
            'title' => 'Listado de usuarios'
        ]);
    }

    public function show($id){
        return "Mostrando detalle del usuario: {$id}";
    }

    public function create(){
        return "Crear nuevo usuario";
    }
}
