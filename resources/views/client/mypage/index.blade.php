@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/mypage.css') }}">
@endsection
@section("content")
    <div class="about_banner_img col-xl-12 col-md-12"><img src="images/blog_img1.jpg" class="img-responsive" style="width: 100%" alt=""/></div>
    <div class="about_banner_wrap col-xl-12 col-md-12">
        <h1 class="m_11">Join Us</h1>
    </div>
    <div class="about-wrapper col-xl-12 col-md-12">
        <div class="container" style="color: white">
            <div class="row about-top">
                <div class="col-md-5">
                    <img src="images/c7.jpg" class="img-responsive" alt=""/>
                </div>
                <div class="col-md-7 about-left-text">
                    <div class="wrapTitle">
                        <div>LET is DO IT WITH US</div>
                    </div>
                    <div class="wrapTitleMyPage">
                         <span>Welcome to the 6 month workout challenge to improve your health. We have 3 stages for you to set your fitness goals. Help us understand more about your health and daily routine. Remember to come back periodically to updated us of the situation.
                             <br/><p style="font-size: 30px">Thank you so much.</p>
                         </span>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="wrapVideoTitle">
           <h3><b>Three Basic Exercises To Advanced</b></h3>
        </div>
        <div class="wrapVideo">
            <div class="item">
                <div class="titleVideo">
                    Basic
                </div>
                <div class="video">
                    <div id="video1">

                    </div>
                </div>
            </div>
            <div class="item">
                <div class="titleVideo">
                    More advanced
                </div>
                <div class="video">
                    <div id="video2">

                    </div>
                </div>
            </div>
            <div class="item">
                <div class="titleVideo">
                    Increase more
                </div>
                <div class="video">
                    <div id="video3">

                    </div>
                </div>
            </div>
        </div>
            <div class="wrapTitleQuestion">
                <div class="titleQuestion">
                    Questionnaire
                </div>
                <div class="wrapContentQuestion">
                    Based on the results of this survey, we want to see what you can do to take better care of yourself, so please let us know your candid opinion. We are very happy.                </div>
            </div>
            <div class="wrapQuestionAndChanllen">
                <div class="wrapItemQuestion">
                    <div class="itemQuestion">
                        <div class="titleQuestion">
                            0 months
                        </div>
                        {{-- 0 m --}}
                            @if(empty(Auth::user()->join_event))
                                <a href="{{ route('zero.one.question') }}" class="wrapLinkQuestion hide-button" id="oneMonths">
                                    Before release
                                </a>
                            @else
                                @if (Auth::user()->status_view == null && Auth::user()->status_view < 2)
                                <a href="{{ route('zero.one.question') }}" class="wrapLinkQuestion" id="oneMonths">
                                    To answer
                                </a>
                                @else
                                <a href="{{ route('zero.one.question') }}" class="wrapLinkQuestion hide-button" style="background: #8bbde2" id="oneMonths">
                                    Answered
                                </a>
                                @endif
                            @endif

                    </div>
                    <div class="itemQuestion">
                        <div class="titleQuestion">
                            3 months
                        </div>
                            @if (empty(Auth::user()->join_event))
                                <a href="{{ route('afterThree') }}" class="wrapLinkQuestion hide-button" id="twoMonths">
                                    Before release
                                </a>
                            @else
                                @if($currentTime < $threeMonth)
                                    <a href="{{ route('afterThree') }}" class="wrapLinkQuestion hide-button" id="twoMonths">
                                        Before release
                                    </a>
                                @endif
                                @if ($currentTime > $threeMonth)
                                    @if (Auth::user()->status_view == 1)
                                        <a href="{{ route('afterThree') }}" class="wrapLinkQuestion" id="twoMonths">
                                            To answer
                                        </a>
                                    @endif
                                    @if (Auth::user()->status_view == 2)
                                        <a href="{{ route('afterThree') }}" class="wrapLinkQuestion hide-button" style="background: #8bbde2" id="twoMonths">
                                            To answer
                                        </a>
                                    @endif
                                    @if (Auth::user()->status_view > 2)
                                        <a href="{{ route('afterThree') }}" class="wrapLinkQuestion hide-button" style="background: #8bbde2" id="twoMonths">
                                            Answered
                                        </a>
                                    @endif
                                @endif
                            @endif

                        </div>
                    <div class="itemQuestion">
                        <div class="titleQuestion">
                            6 months
                        </div>
                            @if (empty(Auth::user()->join_event))
                                <a href="{{ route('afterThree') }}" class="wrapLinkQuestion hide-button" id="twoMonths">
                                    Before release
                                </a>
                            @else
                                @if($currentTime < $sixMonth)
                                    <a href="{{ route('afterThree') }}" class="wrapLinkQuestion hide-button" id="twoMonths">
                                        Before release
                                    </a>
                                @endif
                                @if ($currentTime > $sixMonth)
                                    @if (Auth::user()->status_view === 3)
                                        <a href="{{ route('afterThree') }}" class="wrapLinkQuestion hide-button" style="background: #8bbde2" id="twoMonths">
                                            Answered
                                        </a>
                                    @else
                                        <a href="{{ route('afterThree') }}" class="wrapLinkQuestion" id="twoMonths">
                                            To answer
                                        </a>
                                    @endif
                                @endif
                            @endif

                    </div>
            </div>

                @if (Auth::user()->status_view == null)
                <div class="wrapUl" style="background: linear-gradient(to bottom, #72d0f4 25%, #3399ff 79%);">
                    <h4>Please tell us a little bit about you. Answer the questions by clicking the "Answer the question" button.</h4>
                   </div>
                    @else
                    <div class="wrapUl" style="background: linear-gradient(to bottom, #72d0f4 25%, #3399ff 79%);">
                        <h4>List Of Exercises</h4>
                        <div class="wrapList">
                            <ul class="blog-list">
                                @foreach ($categories as $item)
                                <li><a href="{{ route('program',$item->id) }}">{{ $item->name }}</a></li>
                                @endforeach
                              </ul>
                        </div>
                       </div>
                @endif
        </div>
    <input type="hidden" value="{{ $currentTime }}" id="currentTime">
    <input type="hidden" value="{{ $join_event }}" id="joinEvent">
    <input type="hidden" value="{{ $threeMonth }}" id="threeMonth">
    <input type="hidden" value="{{ $sixMonth }}" id="sixMonth">
@endsection

@section("script")
<script src="{{ asset('js/client/mypage.js') }}"></script>
@endsection
