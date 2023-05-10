<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register/index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'address' => 'required|max:250',
            'phone' => 'required|numeric|min:11',
            'password' => 'required|min:5|max:255',
        ]);
        
        $request->validate([
            'roles' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData)->assignRole($request->post("roles"));

        return redirect('/login')->with('success', 'Akun Anda berhasil ditambahkan! Silahkan Masuk!');
    }
}
