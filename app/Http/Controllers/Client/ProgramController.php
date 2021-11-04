<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\client\video;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index($id)
    {

        $video = video::where('categories_id',$id)->first();
        return view('client.Program.index',compact('video'));
    }
}
