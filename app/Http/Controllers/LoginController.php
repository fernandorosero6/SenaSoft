<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('/RegistroLogin.login');
    }

    public function store(Request $request){
        $login = new Login();
        $login->email = $request->email;
        $login->contraseña = $request->contraseña;
        $login->save();
        return view('/RegistroLogin.login');
    }
}
