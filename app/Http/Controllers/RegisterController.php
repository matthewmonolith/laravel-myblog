<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|max:255'
        ]); //laravel has an auto thing where if this validate fails the next lines will never run, just redirects back to form page



        $user = User::create($attributes);

        auth()->login($user);

        session()->flash('success', 'account successfully created!');

        return redirect('/');
    }
}
