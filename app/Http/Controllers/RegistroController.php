<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrarRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect('/home'); 
        }

        return view('user.registrar');
    }

    public function registrar(RegistrarRequest $request){
        $user = User::create($request->validated());

        return redirect('/login')->with('success', 'Usuario creado correctamente');
    }
}
