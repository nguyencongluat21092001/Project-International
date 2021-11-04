@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/info.css') }}">
@endsection
@section("content")
<form action="{{ route('user.postInfo') }}" id="inforQuestion" method="POST">
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
                            I would like to ask you about yourself. Please select the one that applies.
                        </p>
                    </div>

                    <!-- Form -->
                    <div class="content-body">
                            <div class="form-row">
                                <div class="form-left">Age：</div>
                                <div class="form-right">
                                    <input type="number" name="age">age
                                </div>
                            </div>
                            <div class="textError">
                                <label id="age-error" class="error" for="age" style="color:red"></label>
                            </div>
                            <div class="form-row">
                                <div class="form-left">Marriage：</div>
                                <div class="form-right">
                                    <div>
                                        <label>
                                             <input name="relation" type="radio" value="married">
                                            Married</label>
                                    </div>
                                    <div>
                                        <label>
                                            <input name="relation" type="radio" value="Unmarried">
                                            Unmarried</label>

                                    </div>
                                    <div>
                                        <label>
                                            <input name="relation" type="radio" value="Divorce or bereavement">
                                            Divorce or bereavement</label>

                                    </div>
                                </div>
                            </div>
                            <div class="textError">
                                <label id="relation-error" class="error" for="relation" style="color:red"></label>
                            </div>
                            <div class="form-row">
                                <div class="form-left">Housemate：</div>
                                <div class="form-right">
                                    <span>
                                        <input name="roommate" type="radio" value="housemate">Housemate
                                    </span>
                                    <span>
                                        <input name="roommate" type="radio" value="father">father
                                    </span>

                                    <span>
                                        <input name="roommate" type="radio" value="mother">mother
                                    </span>
                                    <span>
                                        <input name="roommate" type="radio" value="Child">Child
                                    </span>
                                    <span>
                                        <input name="roommate" type="radio" value="Grandchild">Grandchild
                                    </span>
                                    <span>
                                        <input name="roommate" type="radio" value="Other">Other
                                    </span>
                                    <span>
                                        <input name="roommate" type="radio" value="None">None
                                    </span>
                                </div>
                            </div>
                            <div class="textError">
                                <label id="roommate-error" class="error" for="roommate" style="color:red"></label>
                            </div>
                            <div class="form-row">
                                <div class="wrapHistory">
                                    <div class="form-left">Diet history:</div>
                                    <div class="form-right">
                                        <div class="wrapInput">
                                            <div class="itemInput">
                                                <input type="radio" value="None" name="historyRadio" id="radioHistoryOne">
                                                <label for="radioHistoryOne">None</label>
                                            </div>
                                            <div class="itemInput">
                                                <input type="radio" value="Yes" name="historyRadio" id="radioHistoryTwo" class="btnYes">
                                                <label for="radioHistoryTwo">Yes</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row" >
                                <div class="wrapHistory">
                                    <div class="form-left"></div>
                                    <div class="form-right">
                                        <div class="wrapInputSelec">
                                            <div class="itemInput">
                                                <select name="yearpicker" class="yearpicker" id="yearpicker"></select>
                                                <span class="mb-0">Year</span>
                                            </div>
                                            <div class="itemInput">
                                                <select name="monthPicker" class="monthPicker" id="monthPicker"></select>
                                                <span class="mb-0">Months</span>
                                            </div>

                                        </div>
                                        <div class="wrapInputHistory">
                                            <span>Day</span>
                                            <input type="text" name="delayDay" class="delayDay" id="delayDay">
                                            <span>Day</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="textError">
                            </div>
                            <div class="form-row">
                                <div class="wrapHistory">
                                    <div class="form-left">Low-protein diet:</div>
                                    <div class="form-right">
                                        <div class="wrapInput">
                                            <div class="itemInput">
                                                <input type="radio" value="None" name="diet" id="dietOne">
                                                <label for="dietOne">None</label>
                                            </div>
                                            <div class="itemInput">
                                                <input type="radio" value="Yes" name="diet" id="dietTwo" class="diet">
                                                <label for="dietTwo">Yes</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row" >
                                <div class="wrapHistory">
                                    <div class="form-left"></div>
                                    <div class="form-right">
                                        <div class="wrapInputSelec">
                                            <div class="itemInput">
                                                <select name="yearpickerDiet" class="yearpicker" id="yearpickerDiet"></select>
                                                <span>Year</span>
                                            </div>
                                            <div class="itemInput">
                                                <select name="monthPickerDiet" class="monthPicker" id="monthPickerDiet"></select>
                                                    <span>Months</span>
                                            </div>

                                        </div>
                                        <div class="wrapInputHistory">
                                            <span>Day</span>
                                            <input type="text" name='delayDayDiet'class="delayDay" id="delayDayDiet">
                                            <span>day</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="textError">
                            </div>
                            <div class="form-row">
                                <div class="form-left">Cook </div>
                                <div class="form-right">
                                    <span>
                                        <input id="cooking1" name="cooking" type="radio" value="The person">The person
                                        <label for="cooking1">Other</label>
                                    </span>
                                    <span>
                                        <input id="cooking2" name="cooking" type="radio" value="family">family
                                        <label for="cooking2">Other</label>
                                    </span>
                                    <span>
                                        <input id="cooking3" name="cooking" type="radio" value="Other" id="cooking">
                                        <label for="cooking3">Other</label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-link">
                                <button class="backButton" onclick="goBack()" type="button">Back</button>
                                <button class="form-link-primary" type="submit">Next </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection

@section("script")
<script src="{{ asset('js/client/infordiet.js') }}"></script>
@endsection
