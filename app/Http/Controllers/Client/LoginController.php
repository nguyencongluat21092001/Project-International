<?php

namespace App\Http\Controllers\Client;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index() {
        return view('client.login.index');
    }

    public function login(Request $request) {

        if(Auth::check() === false ) {
            $validated = $request->validate([
                'code' => 'required',
                'password' => 'required'
            ]);
            if (Auth::attempt(['code' => $request->code, 'password' => $request->password])) {
                Toastr::success('Hello'.Auth::user()->code, 'Fitness Daily Announcement');
                return redirect()->route('myPage');
            }
            return redirect()->back()->withErrors(['Caromam ID or password is wrong。']);
        }
        return redirect()->route('home');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('home');
    }

    public function register()
    {
        return view('client.register.index');
    }
    public function postRegiester(Request $request)
    {

        $address = $request->city.$request->address;
        $bmi = ($request->weight)/( ($request->weight) * ($request->weight) );
        try {
            User::insert([
                'code' => 1,
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phoneNumber,
                'zip_code' => $request->zipCode,
                'address' => $address,
                'bmi' => $bmi,
            ]);
            DB::commit();
            Toastr::success('Thank you for joining us. We will contact you as soon as possible','Hello'.$request->name);
            return redirect()->route('thanks.info');
        } catch (Exception $e) {
            Log::info($e);
            DB::rollBack();
            dd($e);
            Toastr::error('An error has occurred','Hello');

        }

    }
}
