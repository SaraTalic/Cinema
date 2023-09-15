<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;


class UserController extends Controller
{


    //Prikaz Registracije
    public function create()
    {
        return view('users.register');
    }

    //Kreiranje Novog Korisnika
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect()->intended()->with('message', 'Uspješno ste se registrovali!');
    }

    //Odjava Korisnika
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Odjavili ste se.');

    }

    //Prikaz Prijave
    public function login()
    {
        return view('users.login');
    }

    //Potvrda Korisnika
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect()->intended()->with('message', 'Uspješno ste se prijavili. Uživajte! :).');
        }

        return back()->withErrors(['email' => 'POGREŠAN EMAIL ILI LOZINKA.'])->onlyInput('email');
    }
}