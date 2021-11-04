<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function index() {
        $users = User::get();

        $currentTime = date('Y-m-d', strtotime(Carbon::now()));

        return view('admin.dashboard.index', compact('users', 'currentTime'));
    }

    public function detail($param) {
        $user = User::where('code', $param)->first();
        $threeMonth = date('Y-m-d', strtotime($user->join_event . '+ 3 months'));
        $sixMonth = date('Y-m-d', strtotime($user->join_event . '+ 6 months'));
        $currentTime = date('Y-m-d', strtotime(Carbon::now()));
        return view('admin.dashboard.detail', compact('user', 'threeMonth', 'sixMonth', 'currentTime'));
    }

    public function postChecked($param) {
        try {
            $user = User::where('code', $param)->first();
            $email = $user->email;
            $user->update([
                'join_event' => Carbon::now(),
                'password' => bcrypt(123456789),
                'code' => 'kw'.substr($user->zip_code, 0, 4)
            ]);
            Mail::send('mail.index', [
                'user' => $user,
            ], function($message)  use ($user,$email) {
                $message->to('ha9a1ltt@gmail.com')->subject('We Are Contacting You From The Fitness Daily Company');
            });

        Toastr::success('Successfully sent confirmation mail','Notification');
        return redirect()->route('admin.dashboard');
        } catch (Exception $e) {
            Log::info($e);
//            dd($e);
            Toastr::error('An error has occurred, please check again','Notification');
            return redirect()->back();
        }
    }
}
