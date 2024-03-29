<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class Coppel extends Controller
{


    public function login()
    {
        return view('uriel.login');
    }


    public function loginOrCreateAccount(Request $request)
    {


        $origin = $request->origin;
        $email = $request->email;
        $pwd = $request->password;


        #Obtener usuarios con el correo ingresado

        $users = User::where('email', '=', $email)->get();


        if ($origin == 0) { # Inciar sesion
            if (count($users) > 0) {

                if (Auth::attempt(['email' => $email, 'password' => $pwd])) {
                    return redirect()->route('home');
                }
            }
        } else { // crear cuenta

            if (count($users) <= 0) {
                $user = User::create(
                    [
                        'name' => '',
                        'email' => $email,
                        'password' => Hash::make($pwd),
                        'address' => '',
                        'gender' => '',
                        'birth_date' => '2019-10-10',
                        'client_number' => -1,
                        'phone_number' => '',
                        'total_balance' => 0,
                        'street' => '',
                        'suburb' => '',
                        'postal_code' => '',
                        'state' => '',
                        'city' => '',
                        'credits' => '',
                        'rfc' => ''
                    ]
                );
            }
        }



        return view('uriel.login');
    }
}
