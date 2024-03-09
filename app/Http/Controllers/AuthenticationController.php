<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        dd($request);
        $credential =  $request->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);



        if (Auth::attempt($credential)) {

            return redirect()->route('dasboard');
        }

        return "gagal";
    }
}