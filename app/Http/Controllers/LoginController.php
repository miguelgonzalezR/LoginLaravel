<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect('/home');
        }
        return view('user.login');
    }

    public function login(LoginRequest $request){
        $crede = $request->getCredentials();

        if(!Auth::validate($crede)){
            return redirect()->to('/login')->withErrors('Usuario o contraseña invalida');
        }

        $user = Auth::getProvider()->retrieveByCredentials($crede);

        Auth::login($user);

        return $this->authenticated($request, $user);

    }

    public function authenticated(Request $request, $user){
        return redirect('/home');
    }

}
