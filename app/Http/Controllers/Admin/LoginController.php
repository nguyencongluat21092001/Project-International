<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
//         dd(bcrypt("admin"));
        return view('admin.login.index');
    }

    public function login(Request $request) {
        $validated = $request->validate(
            [
            'email' => 'required|email',
            'password' => 'required'
            ],
            [
                'email.email' => 'The ID or password is incorrect。'
            ]
        );
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->withErrors(['The ID or password is incorrect。']);
    }
}
