<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(){
        return view('register');
    }

    public function insert(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:3',
        ]);
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);
        return redirect('/login');
    }

    public function index(){
        return view('index');
    }
}
