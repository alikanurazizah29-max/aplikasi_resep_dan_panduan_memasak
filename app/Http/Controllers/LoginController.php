<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function prosesLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            if ($user->password == $request->password) {
                Auth::login($user);
                return redirect()->route('dashboard');
            }
            return redirect()->back();
        }
        return redirect()->back();
    }
}
