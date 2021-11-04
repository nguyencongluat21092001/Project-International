<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionafterthreeController extends Controller
{
    public function oneQuestionAfterThree()
    {
        return view('client.question.page-one');
    }
}
