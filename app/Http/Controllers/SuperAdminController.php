<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRole;
use App\Models\UserToken;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    public function getLogin()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        $user = Auth::attempt($credentials);
        if ($user) {
            $user = Auth::user();
            return redirect()->intended('/admin/welcome');
        } else {
            return redirect('/admin/login')->with('err', 'Email atau Password yang anda masukan tidak cocok.');
        }
    }

    public function getRegister()
    {
        return view('admin.register');
    }

    public function postRegister(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 0
        ]);

        $userRole = UserRole::create([
            'role_id' => 1,
            'user_id' => $user->id
        ]);

        $userToken = UserToken::create([
            'user_id' => $user->id,
            'token' => sha1(time())
        ]);

        return redirect('/admin/login')->with('message', 'Pendaftaran berhasil. Silahkan login dengan akun anda');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
