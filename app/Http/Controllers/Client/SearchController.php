<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\client\Company;
use App\Models\client\Relation;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function index() {
        return view('client.search.index');
    }

    public function postSearchId(Request $request) {
        try {
            $user = User::where('name', $request->name)->where('code', $request->code)->where('email', $request->email)->first();

            if ($user) {
                Auth::login($user);
                if ($user->subcriber == null) {
                    return redirect()->route('information');
                } else {
                    return redirect()->route('myPage');
                }
            }

            return redirect()->back()->withErrors('The corresponding ID was not found Please contact。');

        } catch (\Exception $e) {
            Log::error($e);
        }
    }
}
