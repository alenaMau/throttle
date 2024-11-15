<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TestController extends Controller
{
    public function index()
    {
        if (session()->has('token')) {
            $token = session('token');
            $user = User::where('token', $token)->first();
            $hello = $user ? "Hello {$user->name}!" : 'Hello!';
            return view('main', compact('hello'));
        }
        return view('main');
    }

    public function registration()
    {
        return view('reg');
    }

    public function storeRegistration(Request $request)
    {
        $errors = [];
        $data = $request->all();

        if (!$data['name']) {
            $errors[] = 'Укажите имя.';
        }
        if (!$data['email']) {
            $errors[] = 'Укажите почту.';
        }
        if (!$data['password1'] || !$data['password2']) {
            $errors[] = 'Вам нужно ввести пароль два раза.';
        }
        if ($data['password1'] !== $data['password2']) {
            $errors[] = 'Пароли должны быть одинаковы.';
        }
        if ($errors) {
            return view('reg', ['errors' => $errors, 'msg' => session('warning')]);
        }

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password1'],
        ]);

        return redirect()->route('login');
    }

    public function login()
    {
        return view('login');
    }

    public function signin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $credentials['email'])->first();
            $token = Str::random(20);
            $user->update(['token' => $token]);
            session(['token' => $token]);
            return redirect()->route('test');
        }

        return redirect()->route('login');
    }
}