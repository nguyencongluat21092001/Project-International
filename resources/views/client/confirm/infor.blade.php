@extends('client.app')
@section('css')
    <link rel="stylesheet" href="{{asset("assets/css/client/confirmInfor.css")}}">
@endsection
@section("content")
    <div class="wrapConfirmInfor container">
        <div class="wrapTitle">
            <div class="titleBig">
                Fitness Daily
            </div>
            <div class="titleSmall">
                Enter shipping address information
            </div>
        </div>
        <form action="{{ route("postInforUser") }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
                <div class="wrapForm">
                    <div class="title">
                        <div>
                            Full name
                        </div>
                    </div>
                    <div class="answer">
                        <div>
                            {{ $dataInfor['name'] }}
                        </div>
                    </div>
                </div>
                <div class="wrapForm">
                    <div class="title">
                        <div>
                            Mail Address
                        </div>
                    </div>
                    <div class="answer">
                        <div>
                            {{ $dataInfor['email'] }}
                        </div>
                    </div>
                </div>
                <div class="wrapForm">
                    <div class="title">
                        <div class="wrapPhoneNumber">
                            <div class="spanTitle">
                                Phone Number

                            </div>
                            <div class="tutorialTitle">
                                No hyphen
                            </div>
                        </div>
                    </div>
                    <div class="answer">
                        <div>
                            {{ $dataInfor['phoneNumber'] }}
                        </div>
                    </div>
                </div>
                <div class="wrapForm">
                    <div class="title">
                        <div>
                            Delivery address
                        </div>
                    </div>
                    <div class="answer">
                        <div class="wrapAnswer">
                            <div class="titleAnswer">
                                Flight number
                            </div>
                            <div class="textAnswer">
                                {{ $dataInfor['zipCode'] }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapForm">
                    <div class="title">
                    </div>
                    <div class="answer">
                        <div class="wrapAnswerCity">

                            <div class="wrapDistrict">
                                <div class="titleAnswer">
                                    District name
                                </div>
                                <div class="textAnswer">
                                    {{ $dataInfor['city'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapForm">
                    <div class="title">

                    </div>
                    <div class="answer">
                        <div class="wrapAnswer">
                            <div class="titleAnswer">
                                Address, etc.

                            </div>
                            <div class="textAnswer">
                                {{ $dataInfor['address'] }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapForm">
                    <div class="title">

                    </div>
                    <div class="answer">
                        <div class="wrapAnswer">
                            <div class="titleAnswer">
                                Building name
                            </div>
                            <div class="textAnswer">
                                {{ $dataInfor['builDing'] }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-link">
                    <button onclick="goBack()" type="button">Back</button>
                    <button class="form-link-primary" type="submit">Continue</button>
                </div>
        </form>
    </div>
@endsection

@section("script")

@endsection
