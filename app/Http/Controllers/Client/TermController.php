<?php

namespace App\Http\Controllers\Client;

use Carbon\Carbon;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TermController extends Controller
{
    public function index() {
        return view('client.term.index');
    }

    public function postConfirm() {
        User::where('code', Auth::user()->code)->update([
            'term_of_service' => Carbon::now()
        ]);

        return redirect()->route('myPage');
    }
}
  