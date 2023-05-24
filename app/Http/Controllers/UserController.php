<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        if ($request->input('password') == $request->input('confirm_password')) {
            User::create([
                'surname' => $request->input('surname'),
                'name' => $request->input('name'),
                'patronic' => $request->input('patronic'),
                'email' => $request->input('email'),
                'login' => $request->input('login'),
                'password' => Hash::make($request->input('password')),
            ]);
            return redirect('/login')->with('success', 'Вы успешно зарегистрировались!');
        } else {
            return redirect('/registration')->with('error', 'Пароли не совпадают!');
        }
    }

    public function login(Request $request)
    {
        if (!Auth::attempt([
            'login' => $request->input('login'),
            'password' => $request->input('password')
        ])) {
            return redirect('/login')->with('error', 'Не правильная почта или пароль!');
        }
        $user = Auth::guard('sanctum')->user();
        Auth::login($user);
        $token = $user->createToken('auth_token')->plainTextToken;
        if ($user->role == 1) {
            return  redirect('/admin');
        } else {
            return redirect('/profile')->with('success', 'Вы успешно авторизовались!');
        }
    }

    public function logout()
    {
        auth('sanctum')->user()->tokens()->delete();
        Auth::logout();
        return redirect('/');
    }
}
