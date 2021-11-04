<?php

namespace App\Http\Controllers\Client;

use Exception;
use Illuminate\Http\Request;
use App\Models\client\Question;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class QuestionController extends Controller
{

    public function info() {
        return view('client.question.info');
    }

    public function postInfo(Request $request)
    {
        try {
            foreach($request->except('_token','_method') as $key=>$answerInfor) {
                Question::insert([
                'user_id' => Auth::user()->id,
                'question_id' => $key,
                'value' => $answerInfor,
                'item_id' => 'infor',
                ]);
            }
            Toastr::success('Hello'.Auth::user()->code, 'Fitness Daily Announcement');
            return redirect()->route('zero.one.question');
        } catch (Exception $e) {
            Log::info($e);
            dd($e);
            DB::rollBack();
            Toastr::error('An error has occurred。Please check again', 'Fitness Daily Announcement');
            return back();
        }
    }

    public function zeroMonthPageOne() {
      
        return view('client.question.page-one');
    }

    public function postQuestionPageOne(Request $request)
    {
        $request->session()->put('answerArr',$request->awnser);
        return redirect()->route('zero.two.question');
    }

    public function zeroMonthPageTwo() {

        return view('client.question.page-two');
    }

    public function postQuestionPageTwo(Request $request)
    {
        $request->session()->put('answerArr2',$request->answer2);
        return redirect()->route('zero.three.question');
    }

    public function zeroMonthPageThree() {
        return view('client.question.page-three');
    }

    public function postQuestionPageThree(Request $request)
    {
        $request->session()->put('answerArr3',$request->answer3);
        return redirect()->route('confirmquestion');
    }

    public function zeroMonthPageFour() {
        return view('client.question.page-four');
    }

    public function afterThree ()
    {
        return view('client.checkbmi.index');
    }

    public function updateBmi(Request $req)
    {
        $user = Auth::user()->update([
            'bmiafterthree' => $req->result
        ]);
        return redirect()->route('oneQuestionAfterThree');
    }
}
