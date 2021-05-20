<?php

namespace App\Http\Controllers;

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
}
