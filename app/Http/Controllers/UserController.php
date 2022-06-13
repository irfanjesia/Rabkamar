<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        return view('register', [
            "title" => "Daftar"
        ]);
    }

    public function insert(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:3',
        ]);
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);
        return redirect('/login');
    }

    public function pesan()
    {
        return view('index', [
            'title' => 'Pesan',
            'active' => 'Pesan'
        ]);
    }

    public function akun(User $user)
    {
        return view('akun', [
            'user' => $user,
            'title' => 'Akun Saya',
            'active' => 'Akun'
        ]);
    }

    public function show(Request $request)
    {
        return $request->user();
    }
}
