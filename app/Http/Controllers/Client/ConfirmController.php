<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\client\Question;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ConfirmController extends Controller
{
    public function index()
    {
        $dataInfor = session()->get('dataInfor');
        return view('client.confirm.infor',compact('dataInfor'));
    }

    public function postInforUser()
    {
        $dataInfor = session()->get('dataInfor');
        $address = $dataInfor['city'].$dataInfor['address'];
        try {
            $cus = Auth::user();
            $dataUser = $cus->update([
                'subcriber' => $dataInfor['name'],
                'email' => $dataInfor['email'],
                'phone_number' => $dataInfor['phoneNumber'],
                'zip_code' => $dataInfor['zipCode'],
                'address' => $address,
            ]);
            DB::commit();
            return redirect()->route('thanks.info');
        } catch (Exception $e) {
            Log::info($e);
            DB::rollBack();
        }
    }

    public function confirmquestion(Request $request)
    {
        $dataQuestion1 = $request->session()->get('answerArr');
        $dataQuestion2 = $request->session()->get('answerArr2');
        $dataQuestion3 = $request->session()->get('answerArr3');
        return view('client.confirm.confirmQuestion',compact('dataQuestion1','dataQuestion2','dataQuestion3'));
    }

    public function postConfirmquestion(Request $request)
    {

        $dataQuestion1 = $request->session()->get('answerArr');
        $dataQuestion2 = $request->session()->get('answerArr2');
        $dataQuestion3 = $request->session()->get('answerArr3');
        if ( Auth::user()->status_view == null) {
            try {
                Auth::user()->update([
                    'status_view' => 1
                ]);
                foreach( $dataQuestion1 as $questionId=>$item ) {
                    foreach( $item as $itemId=>$value ) {
                        Question::create([
                            'user_id' => Auth::user()->id,
                            'question_id' => $questionId,
                            'item_id' => $itemId,
                            'value' => $value,
                            'group_question' => 1
                        ]);
                    }
                }
                foreach( $dataQuestion2 as $questionId=>$item ) {
                    foreach( $item as $itemId=>$value ) {
                        Question::create([
                            'user_id' => Auth::user()->id,
                            'question_id' => $questionId,
                            'item_id' => $itemId,
                            'value' => $value,
                            'group_question' => 2
                        ]);
                    }
                }
                foreach( $dataQuestion3 as $questionId=>$item ) {
                    foreach( $item as $itemId=>$value ) {
                        Question::create([
                            'user_id' => Auth::user()->id,
                            'question_id' => $questionId,
                            'item_id' => $itemId,
                            'value' => $value,
                            'group_question' => 3
                        ]);
                    }
                }
                Toastr::success('The answer was sent successfully', 'Fitness Daily Announcement');
                return redirect()->route('thanks.question');
            } catch (Exception $e) {
                Log::info($e);
                Toastr::error('Please answer the question。', 'Fitness Daily');
                return back();
            }
        }

        if ( Auth::user()->status_view == 1) {
            try {
                Auth::user()->update([
                    'status_view' => 2
                ]);
                foreach( $dataQuestion1 as $questionId=>$item ) {
                    foreach( $item as $itemId=>$value ) {
                        Question::create([
                            'user_id' => Auth::user()->id,
                            'question_id' => $questionId,
                            'item_id' => $itemId,
                            'value' => $value,
                            'group_question' => 1
                        ]);
                    }
                }
                foreach( $dataQuestion2 as $questionId=>$item ) {
                    foreach( $item as $itemId=>$value ) {
                        Question::create([
                            'user_id' => Auth::user()->id,
                            'question_id' => $questionId,
                            'item_id' => $itemId,
                            'value' => $value,
                            'group_question' => 2
                        ]);
                    }
                }
                foreach( $dataQuestion3 as $questionId=>$item ) {
                    foreach( $item as $itemId=>$value ) {
                        Question::create([
                            'user_id' => Auth::user()->id,
                            'question_id' => $questionId,
                            'item_id' => $itemId,
                            'value' => $value,
                            'group_question' => 3
                        ]);
                    }
                }
                Toastr::success('The answer was sent successfully', 'Fitness Daily Announcement');
                return redirect()->route('thanks.question');
            } catch (Exception $e) {
                Log::info($e);
                Toastr::error('Please answer the question。', 'Fitness Daily');
                return back();
            }
        }

        if ( Auth::user()->status_view == 2) {
            try {
                Auth::user()->update([
                    'status_view' => 3
                ]);
                foreach( $dataQuestion1 as $questionId=>$item ) {
                    foreach( $item as $itemId=>$value ) {
                        Question::create([
                            'user_id' => Auth::user()->id,
                            'question_id' => $questionId,
                            'item_id' => $itemId,
                            'value' => $value,
                            'group_question' => 1
                        ]);
                    }
                }
                foreach( $dataQuestion2 as $questionId=>$item ) {
                    foreach( $item as $itemId=>$value ) {
                        Question::create([
                            'user_id' => Auth::user()->id,
                            'question_id' => $questionId,
                            'item_id' => $itemId,
                            'value' => $value,
                            'group_question' => 2
                        ]);
                    }
                }
                foreach( $dataQuestion3 as $questionId=>$item ) {
                    foreach( $item as $itemId=>$value ) {
                        Question::create([
                            'user_id' => Auth::user()->id,
                            'question_id' => $questionId,
                            'item_id' => $itemId,
                            'value' => $value,
                            'group_question' => 3
                        ]);
                    }
                }
                Toastr::success('The answer was sent successfully', 'Fitness Daily Announcement');
                return redirect()->route('thanks.question');
            } catch (Exception $e) {
                Log::info($e);
                Toastr::error('Please answer the question。', 'Fitness Daily');
                return back();
            }
        }
    }
}

