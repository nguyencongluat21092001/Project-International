@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/question-list.css') }}">
@endsection
@section("content")

<form id='postQuestionPageOne' action="{{ route('postQuestionPageOne') }}" method='POST'>
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
                                                    @foreach (Config::get('dataquestion.question_1_1') as $key => $item)
                                                    <div class="form-group">
                                                        <input name="awnser[1][1]" value="{{ $item }}" type="radio" id="awnser{{ $key }}">
                                                        <label for="awnser{{ $key }}">{{ $item }}</label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </li>
                                            <li>
                                                <span class="question-title">② Do you eat Japanese food with 3 plates of staple food, main dish and side dish?？</span>

                                                <div class="awnser-list">
                                                    @foreach (Config::get('dataquestion.question_1_2') as $key => $item)
                                                    <div class="form-group">
                                                        <input name="awnser[1][2]" value="{{ $item }}" type="radio" id="awnser1{{ $key }}">
                                                        <label for="awnser1{{ $key }}">{{ $item }}</label>
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
                                                <span class="question-title">① The proper vegetable intake is over 350g per day. What do you think about these habits?？</span>

                                                <div class="awnser-list">
                                                    @foreach (Config::get('dataquestion.question_2_1') as $key => $item)
                                                    <div class="form-group">
                                                        <input name="awnser[2][1]" value="{{ $item }}" type="radio" id="awnser2{{ $key }}"
                                                        >
                                                        <label for="awnser2{{ $key }}">{{ $item }}</label>
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
                                                    @foreach (Config::get('dataquestion.question_2_1') as $key => $item)
                                                    <div class="form-group">
                                                        <input name="awnser[3][1]" value="{{ $item }}" type="radio" id="awnser3{{ $key }}"
                                                        >
                                                        <label for="awnser3{{ $key }}">{{ $item }}</label>
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

                                                <div class="awnser-list">
                                                    @foreach (Config::get('dataquestion.question_2_1') as $key => $item)
                                                    <div class="form-group">
                                                        <input name="awnser[4][1]" value="{{ $item }}" type="radio" id="awnser4{{ $key }}">
                                                        <label for="awnser4{{ $key }}">{{ $item }}</label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-box">
                                <h5 class="question-title">Motion</h5>
                                <ul class="question-list">
                                    <li class="question-item">
                                        1. Eating habit
                                        <ul class="question-child">
                                            <li>
                                                <span class="question-title">① Please answer about exercising regularly</span>

                                                <div class="awnser-list">
                                                    @foreach (Config::get('dataquestion.question_5_1') as $key => $item)
                                                    <div class="form-group">
                                                        <input name="awnser[5][1]" value="{{ $item }}" type="radio" id="awnser5{{ $key }}"
                                                        >
                                                        <label for="awnser5{{ $key }}">{{ $item }}</label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <input type="hidden" name="month" value="0ヶ月">
                            <div class="form-link">
                                <button class="backButton" onclick="goBack()" type="button">Back</button>
                                <button class="form-link-primary" type="submit">Continue</button>
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
