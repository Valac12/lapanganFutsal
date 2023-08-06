<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'tittle' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_user' => 'required|max:50',
            'username' => 'required|min:6|max:10|unique:users',
            'password' => 'required|min:7|max:10',
            'no_telp' => 'required',
            'id_level' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        session()->flash('success', 'Registrasi Berhasil!!');
        return redirect('/login');
    }
}
