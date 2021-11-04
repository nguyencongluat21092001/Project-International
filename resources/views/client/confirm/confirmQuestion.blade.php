@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/question-list.css') }}">

@endsection
@section("content")
<form action="{{ route('postConfirmquestion') }}" method="POST" class="confirm-question">
    @csrf
    @method('POST')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <div class="content-header">
                        <h1 class="content-title">
                            As of 0 months
                        </h1>
                        <p class="content-desc">
                            Fitness Daily
                        </p>
                    </div>
                    <div class="content-body">
                        <form class="question">
                            <div class="form-box">
                                <h5 class="question-title">Food</h5>
                                <ul class="question-list">
                                    <li class="question-item">
                                        1. Eating habit
                                        <ul class="question-child">
                                            <li>
                                                <span class="question-title">① Are you careful about how to eat for weight loss？</span>
                                                <div class="awnser-list">
                                                    @foreach (Config::get('dataquestion.question_1_1') as $item)
                                                    <div class="form-group">
                                                        <input name="awnser[1][1]" value="{{ $item }}" type="radio" id="awnser1" disabled
                                                            @if (isset($dataQuestion1[1][1]))
                                                                {{
                                                                    array_search($item, $dataQuestion1[1]) === false ? '' : 'checked'
                                                                }}
                                                            @endif
                                                        >
                                                        <label for="awnser1">{{ $item }}</label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </li>
                                            <li>
                                                <span class="question-title">② Do you eat Japanese food with 3 plates of staple food, main dish and side dish?</span>

                                                <div class="awnser-list">
                                                    @foreach (Config::get('dataquestion.question_1_2') as $item)
                                                    <div class="form-group">
                                                        <input name="awnser[1][2]" value="{{ $item }}" type="radio" id="awnser1" disabled
                                                            @if (isset($dataQuestion1[1][1]))
                                                                {{
                                                                    array_search($item, $dataQuestion1[1]) === false ? '' : 'checked'
                                                                }}
                                                            @endif
                                                        >
                                                        <label for="awnser1">{{ $item }}</label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="question-item">
                                        2. Vegetables
                                        <ul class="question-child">
                                            <li>
                                                <span class="question-title">①The proper vegetable intake is over 350g per day. What do you think about these habits?？</span>
                                                <div class="awnser-list">
                                                    @foreach (Config::get('dataquestion.question_2_1') as $item)
                                                    <div class="form-group">
                                                        <input name="awnser[2][1]" value="{{ $item }}" type="radio" id="awnser1" disabled
                                                            @if (isset($dataQuestion1[2][1]))
                                                                {{
                                                                    array_search($item, $dataQuestion1[2]) === false ? '' : 'checked'
                                                                }}
                                                            @endif
                                                        >
                                                        <label for="awnser1">{{ $item }}</label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="question-item">
                                        3. Chew well and eat
                                        <ul class="question-child">
                                            <li>
                                                <span class="question-title">① It is important to chew well and eat slowly, but what do you think about these habits？</span>

                                                <div class="awnser-list">
                                                    @foreach (Config::get('dataquestion.question_3_1') as $item)
                                                    <div class="form-group">
                                                        <input name="awnser[3][1]" value="{{ $item }}" type="radio" id="awnser1" disabled
                                                            @if (isset($dataQuestion1[3][1]))
                                                                {{
                                                                    array_search($item, $dataQuestion1[3]) === false ? '' : 'checked'
                                                                }}
                                                            @endif
                                                        >
                                                        <label for="awnser1">{{ $item }}</label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="question-item">
                                        4. Snack
                                        <ul class="question-child">
                                            <li>
                                                <span class="question-title">① What do you think about snacking？</span>
                                                @foreach (Config::get('dataquestion.question_4_1') as $item)
                                                    <div class="form-group">
                                                        <input name="awnser[4][1]" value="{{ $item }}" type="radio" id="awnser1" disabled
                                                            @if (isset($dataQuestion1[4][1]))
                                                                {{
                                                                    array_search($item, $dataQuestion1[4]) === false ? '' : 'checked'
                                                                }}
                                                            @endif
                                                        >
                                                        <label for="awnser1">{{ $item }}</label>
                                                    </div>
                                                    @endforeach
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-box">
                                <h5 class="question-title">Motion</h5>
                                <ul class="question-list">
                                    <li class="question-item">
                                        1. eating habit
                                        <ul class="question-child">
                                            <li>
                                                <span class="question-title">① Please answer about exercising regularly</span>

                                                <div class="awnser-list">
                                                    @foreach (Config::get('dataquestion.question_5_1') as $item)
                                                    <div class="form-group">
                                                        <input name="awnser[5][1]" value="{{ $item }}" type="radio" id="awnser1" disabled
                                                            @if (isset($dataQuestion1[5][1]))
                                                                {{
                                                                    array_search($item, $dataQuestion1[5]) === false ? '' : 'checked'
                                                                }}
                                                            @endif
                                                        >
                                                        <label for="awnser1">{{ $item }}</label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <input type="hidden" name="month" value="0ヶ月">

                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td rowspan="2" class="question-w-40"></td>
                            <td class="table-w" colspan="2">Please select Yes or No answer</td>

                        </tr>
                        <tr>
                            <td style="text-align: center;">Yes</td>
                            <td>No</td>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Config::get('dataquestion.title_question_page_2') as $key=>$item)
                            <tr>
                                <td>{{ $item }}</td>
                                <td>
                                    <input type="radio" name="answer2[{{ $key }}][1]" value="Yes" id=""
                                    @if (isset($dataQuestion2[ $key ]))
                                    {{

                                        array_search('Yes', $dataQuestion2[$key]) === false ? '' : 'checked'
                                    }}
                                    @endif
                                 disabled></td>
                                <td>
                                    <input type="radio" name="answer2[{{ $key }}][1]" value="No" id=""
                                    @if (isset($dataQuestion2[ $key ]))
                                    {{
                                        array_search('No', $dataQuestion2[ $key ]) === false ? '' : 'checked'
                                    }}
                                    @endif
                                disabled></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        <div class="content-body">
            <form class="question">
                <table class="table table-bordered hide-on-mb">
                    <thead>
                        <tr>
                            <td rowspan="2" class="question-w-40"></td>
                            @foreach (Config::get('dataquestion.page_question_3.optionAnswer') as $item)
                            <td class="table-w">{{ $item }}</td>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Does your job spend at least 10 consecutive minutes of intense exercise that leaves you out of breath or your heart beats very fast?</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[1][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[1]))
                                {{
                                    array_search($item, $dataQuestion3[1]) === false ? '' : 'checked'
                                }}
                                @endif
                                disabled></td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Does your job spend at least 10 consecutive minutes of moderate intensity exercise leaving you a little short of breath or beating your heart
                                a little faster?</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[2][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[2]))
                                {{
                                    array_search($item, $dataQuestion3[2]) === false ? '' : 'checked'
                                }}
                                @endif
                                disabled></td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Did you walk or cycle for at least 10 consecutive minutes as you traveled from place to place?</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[3][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[3]))
                                {{
                                    array_search($item, $dataQuestion3[3]) === false ? '' : 'checked'
                                }}
                                @endif
                                disabled></td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Do you spend at least 10 consecutive minutes of intense sports, exercise, or recreational activities that leave you short of breath or have a very fast heartbeat?</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[4][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[4]))
                                {{
                                    array_search($item, $dataQuestion3[4]) === false ? '' : 'checked'
                                }}
                                @endif
                                disabled></td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Do you spend at least 10 consecutive minutes of moderate intensity sports, exercise, or recreational activities that cause you to lose breath a little or your heart beats a little faster?</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[5][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[5]))
                                {{
                                    array_search($item, $dataQuestion3[5]) === false ? '' : 'checked'
                                }}
                                @endif
                                disabled></td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>During the previous week, for how many days did you do things like push-ups, get up and sit down, push weights, lift weights, or crossbars?</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[6][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[6]))
                                {{
                                    array_search($item, $dataQuestion3[6]) === false ? '' : 'checked'
                                }}
                                @endif
                                disabled></td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Last month, have you ever felt pain in your chest area even when you were inactive?</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[7][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[7]))
                                {{
                                    array_search($item, $dataQuestion3[7]) === false ? '' : 'checked'
                                }}
                                @endif
                                disabled></td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Have you ever lost your balance due to shock or fainting?</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[8][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[8]))
                                {{
                                    array_search($item, $dataQuestion3[8]) === false ? '' : 'checked'
                                }}
                                @endif
                                disabled></td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Have you ever had a bone or joint problem after changing the form of movement?</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[9][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[9]))
                                {{
                                    array_search($item, $dataQuestion3[9]) === false ? '' : 'checked'
                                }}
                                @endif
                                disabled></td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Do you eat foods containing meat, fish, eggs, beans, tofu etc 3 or more times a day?</td>
                            @foreach (Config::get('dataquestion.page_question_3.question.answer') as $item)
                            <td><input type="radio" name="answer3[10][0]" value="{{ $item }}"
                                @if (isset($dataQuestion3[10]))
                                {{
                                    array_search($item, $dataQuestion3[10]) === false ? '' : 'checked'
                                }}
                                @endif
                                disabled></td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
                <div class="form-link">
                    <button class="backButton" onclick="goBack()" type="button">Back</button>
                    <button class="form-link-primary" type="submit">Continue</button>
                </div>
            </form>
        </div>
    </div>
</form>

@endsection
@section('script')
@endsection
