<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThankPageController extends Controller
{
    // public function index()
    // {
    //     return view('client.thankspage.index');
    // }

    public function thankspage() {
        return view('client.thankspage.index');
    }

    public function thanks() {
        return view('client.thankspage.confirm-question');
    }
}
