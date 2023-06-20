<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|unique:users|email:dns',
                'password' => 'required|min:5|max:255'
            ]
        );

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Pendaftaran Berhasil! Silahkan login');

        return redirect("/login");
    }
}