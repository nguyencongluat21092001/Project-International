<?php

namespace App\Http\Controllers\Client;

use Carbon\Carbon;
use App\Models\client\Question;
use App\Http\Controllers\Controller;
use App\Models\client\categories;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function index()
    {
//        dd(bcrypt("linh"));
       return view("client.home");
    }

    public function redirectToMyPage()
    {
        
        $user = Auth::user();
        if ($user->status_view == null) {
            $categories = null;
        }
        if ($user->status_view == 1) {
            $categories = categories::where('rules',1)->get();
        }
        if ($user->status_view == 2) {
            $categories = categories::where('rules',2)->get();
        }
        if ($user->status_view == 3) {
            $categories = categories::where('rules',3)->get();
        }
        $currentTime = Carbon::now();
        $join_event = date('Y-m-d', strtotime($user->join_event));
        $threeMonth = date('Y-m-d', strtotime($join_event . '+ 3 months'));
        $sixMonth = date('Y-m-d', strtotime($join_event . '+ 6 months'));
        return view("client.mypage.index", compact('user','currentTime', 'join_event', 'threeMonth', 'sixMonth','categories'));
    }

    private function diffTime()
    {
        $getTime = Auth::user()->join_event;
        if ($getTime == null) {
           return 0;
        }
        $getTimeNow = Carbon::now();
        $ts1 = strtotime($getTime);
        $ts2 = strtotime($getTimeNow);
        $year1 = date('Y', $ts1);
        $year2 = date('Y', $ts2);
        $month1 = date('m', $ts1);
        $month2 = date('m', $ts2);
        return (($year2 - $year1) * 12) + ($month2 - $month1);
    }
}
