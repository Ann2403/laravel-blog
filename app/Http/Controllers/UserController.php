<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLogin;
use App\Http\Requests\StoreRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create() {
        return view('user.create');
    }

    public function store(StoreRegister $request) {
        $data = $request->all();
        /* //хэшируем(зашифровываем) пароль через фасад Hash
         $data['password'] = Hash::make($request->password);
        //либо при помощи функции хэлпер bcrypt() */
        $data['password'] = bcrypt($request->password);

        $user = User::query()->create($data);
        session()->flash('success', 'User is registered');
        Auth::login($user);
        return redirect()->home();
    }

    public function auth() {
        return view('user.authorize');
    }

    public function storeAuth(StoreLogin $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            session()->flash('success', 'You are logged in');
            if (Auth::user()->is_admin) {
                // для блокировки обычных пользователей создаем Middleware
                // регистрируем его для группы роутов "admin" в Kernel.php
                // прописываем middleware для группы роутов "admin" в web.php
                return redirect()->route('admin.index');
            } else {
                return redirect()->home();
            }
        }

        return redirect()->back()->with('err', 'User is not found');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login.create');
    }
}
