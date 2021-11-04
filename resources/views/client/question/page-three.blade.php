@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/question-list.css') }}">
@endsection
@section("content")
<form action=" {{ route('postQuestionPageThree') }} " method="POST">
    @csrf
    @method('POST')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <div class="content-header">
                        <h1 class="content-title">
                            List Questions
                        </h1>
                        <p class="content-desc" style="text-align: center">
                            Let us know how you move!
                        </p>
                    </div>

                    <!-- Form -->
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
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer{{ $key }}"><input type="radio" name="answer3[1][0]" value="{{ $item }}" id="answer{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>Does your job spend at least 10 consecutive minutes of moderate intensity exercise leaving you a little short of breath or beating your heart
                                            a little faster?</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer1{{ $key }}"><input type="radio" name="answer3[2][0]" value="{{ $item }}" id="answer1{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>Did you walk or cycle for at least 10 consecutive minutes as you traveled from place to place?</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer2{{ $key }}"><input type="radio" name="answer3[3][0]" value="{{ $item }}" id="answer2{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <tdDo you spend at least 10 consecutive minutes of intense sports, exercise, or recreational activities that leave you short of breath or have a very fast heartbeat?</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer3{{ $key }}"><input type="radio" name="answer3[4][0]" value="{{ $item }}" id="answer3{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>Do you spend at least 10 consecutive minutes of moderate intensity sports, exercise, or recreational activities that cause you to lose breath a little or your heart beats a little faster?</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer4{{ $key }}"><input type="radio" name="answer3[5][0]" value="{{ $item }}" id="answer4{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>During the previous week, for how many days did you do things like push-ups, get up and sit down, push weights, lift weights, or crossbars?</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer5{{ $key }}"><input type="radio" name="answer3[6][0]" value="{{ $item }}" id="answer5{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>Last month, have you ever felt pain in your chest area even when you were inactive?</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer6{{ $key }}"><input type="radio" name="answer3[7][0]" value="{{ $item }}" id="answer6{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>Have you ever lost your balance due to shock or fainting?</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer7{{ $key }}"><input type="radio" name="answer3[8][0]" value="{{ $item }}" id="answer7{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>Have you ever had a bone or joint problem after changing the form of movement?</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer8{{ $key }}"><input type="radio" name="answer3[9][0]" value="{{ $item }}" id="answer8{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>Do you eat foods containing meat, fish, eggs, beans, tofu etc 3 or more times a day?</td>
                                        @foreach (Config::get('dataquestion.page_question_3.question.answer') as $key => $item)
                                        <td>
                                            <label style="width: 100%; text-align: center; cursor: pointer;" for="answer9{{ $key }}"><input type="radio" name="answer3[10][0]" value="{{ $item }}" id="answer9{{ $key }}"></label>
                                        </td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>


                            <div class="question-mobile-list hide">
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        Does your job spend at least 10 consecutive minutes of intense exercise that leaves you out of breath or your heart beats very fast?
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[1][0]" value="Few"><label for="">Few</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[1][0]" value="Little"><label for="">Little</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[1][0]" value="Normal"><label for="">Normal</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[1][0]" value="Good"><label for="">Good</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[1][0]" value="Very good"><label for="">Very good</label>
                                    </li>
                                </ul>
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        Does your job spend at least 10 consecutive minutes of moderate intensity exercise leaving you a little short of breath or beating your heart
                                        a little faster?
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[2][0]" value="Few"><label for="">Few</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[2][0]" value="Little"><label for="">Little</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[2][0]" value="Normal"><label for="">Normal</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[2][0]" value="Good"><label for="">Good</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[2][0]" value="Very good"><label for="">Very good</label>
                                    </li>
                                </ul>
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        Did you walk or cycle for at least 10 consecutive minutes as you traveled from place to place?
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[3][0]" value="Few"><label for="">Few</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[3][0]" value="Little"><label for="">Little</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[3][0]" value="Normal"><label for="">Normal</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[3][0]" value="Good"><label for="">Good</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[3][0]" value="Very good"><label for="">Very good</label>
                                    </li>
                                </ul>
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        Do you spend at least 10 consecutive minutes of intense sports, exercise, or recreational activities that leave you short of breath or have a very fast heartbeat?
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[4][0]" value="Few"><label for="">Few</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[4][0]" value="Little"><label for="">Little</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[4][0]" value="Normal"><label for="">Normal</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[4][0]" value="Good"><label for="">Good</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[4][0]" value="Very good"><label for="">Very good</label>
                                    </li>
                                </ul>
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        Do you spend at least 10 consecutive minutes of moderate intensity sports, exercise, or recreational activities that cause you to lose breath a little or your heart beats a little faster?
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[5][0]" value="Few"><label for="">Few</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[5][0]" value="Little"><label for="">Little</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[5][0]" value="Normal"><label for="">Normal</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[5][0]" value="Good"><label for="">Good</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[5][0]" value="Very good"><label for="">Very good</label>
                                    </li>
                                </ul>
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        During the previous week, for how many days did you do things like push-ups, get up and sit down, push weights, lift weights, or crossbars?
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[6][0]" value="Few"><label for="">Few</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[6][0]" value="Little"><label for="">Little</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[6][0]" value="Normal"><label for="">Normal</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[6][0]" value="Good"><label for="">Good</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[6][0]" value="Very good"><label for="">Very good</label>
                                    </li>
                                </ul>
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        Last month, have you ever felt pain in your chest area even when you were inactive?
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[7][0]" value="Few"><label for="">Few</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[7][0]" value="Little"><label for="">Little</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[7][0]" value="Normal"><label for="">Normal</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[7][0]" value="Good"><label for="">Good</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[7][0]" value="Very good"><label for="">Very good</label>
                                    </li>
                                </ul>
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        Have you ever lost your balance due to shock or fainting?
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[8][0]" value="Few"><label for="">Few</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[8][0]" value="Little"><label for="">Little</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[8][0]" value="Normal"><label for="">Normal</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[8][0]" value="Good"><label for="">Good</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[8][0]" value="Very good"><label for="">Very good</label>
                                    </li>
                                </ul>
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        Have you ever had a bone or joint problem after changing the form of movement?
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[9][0]" value="Few"><label for="">Few</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[9][0]" value="Little"><label for="">Little</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[9][0]" value="Normal"><label for="">Normal</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[9][0]" value="Good"><label for="">Good</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[9][0]" value="Very good"><label for="">Very good</label>
                                    </li>
                                </ul>
                                <!-- Question mobile -->
                                <ul class="question-mobile">
                                    <li class="question-title">
                                        Do you eat foods containing meat, fish, eggs, beans, tofu etc 3 or more times a day?
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[10][0]" value="Few"><label for="">Few</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[10][0]" value="Little"><label for="">Little</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[10][0]" value="Normal"><label for="">Normal</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[10][0]" value="Good"><label for="">Good</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="answer3[10][0]" value="Very good"><label for="">Very good</label>
                                    </li>
                                </ul>
                            </div>

                            <div class="form-link">
                                <button class="backButton" onclick="goBack()" type="button">Back</button>
                                <button class="form-link-primary" type="submit">Continued</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section("script")
@endsection
