<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function store(request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validateData['password'] = bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        // $request->session()->flash('success', 'Registration sucessfull! please login');
        return redirect('/login')->with('success', 'Registration sucessfull! please login');
    }
}
