<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }



    /* funcion para redireccionar al login si no se esta logiado
        public function index(){
        if(!Auth::check()){
            return redirect('/login'); 
        }
        return view('home.index');
    }
    */

}
