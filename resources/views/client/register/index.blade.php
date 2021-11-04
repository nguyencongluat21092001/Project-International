@extends('client.app')
@section('css')
    <link rel="stylesheet" href="{{asset("assets/css/client/information.css")}}">
    <style>
        .wrappInformation {
            padding: 100px 0;
        }
    </style>
@endsection
@section("content")
    <div class="container wrappInformation">
        <div class="titleInforMation">
            <span>
                Join us for a healthy body
            </span>
        </div>
        <div class="wrappFormInformation">
            <form action="{{ route('postRegiester') }}" id="informationForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="itemPost">
                    <div class="wrapSpanForm">
                        <span>
                            Full name
                        </span>
                    </div>
                    <div class="wrapInputSpan">
                        <input type="text" name="name" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="itemPost">
                    <div class="wrapSpanForm">
                        <span>
                            Mail Address
                        </span>
                    </div>
                    <div class="wrapInputSpan">
                        <input type="email" id="email" name="email" value="{{ old('email')}}">
                    </div>
                </div>
                <div class="itemPost">
                    <div class="wrapSpanForm">
                        <span>
                            Mail Address
                        </span>
                        <div class="mailConfirm">
                            Verification
                        </div>
                    </div>
                    <div class="wrapInputSpan">
                        <input type="text" name="emailConfirm" value="{{ old('emailConfirm')}}">
                    </div>
                </div>
                <div class="itemPost">
                    <div class="wrapSpanForm">
                        <span>
                            Phone Number
                        </span>
                        <br>
                        <div class="mailConfirm">
                            no hyphen
                        </div>
                    </div>
                    <div class="wrapInputSpan">
                        <input type="number" name="phoneNumber" class="uintTextBox" value="{{ old('phoneNumber')}}" />&nbsp;<span class="errmsg" style="color: red;font-weight:100"></span>
                    </div>
                </div>
                <div class="itemPost">
                    <div class="wrapSpanForm">
                        <span>
                            Delivery address
                        </span>
                        <br>
                    </div>
                    <div class="wrapInputSpan">
                        <div class="wrapInputAndText">
                            <div class="textTopInput">
                                Flight number
                            </div>
                            <input type="number" name="zipCode" class="uintTextBox2"  value="{{ old('zipCode')}}"/>&nbsp;<span class="errmsg2" style="color: red;font-weight:100"></span>

                        </div>
                    </div>
                </div>
                <div class="itemPost">
                    <div class="wrapSpanForm">

                    </div>
                    <div class="wrapInputSpan">
                        <div class="wrapInputAndText">
                            <div class="wrapText">
                                <div class="textTopInput">
                                    City name + District name
                                </div>

                            </div>
                            <div class="wrapOption">
                                <div class="inforCity">
                                    <input type="text" name="city" value="{{ old('city') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="itemPost">
                    <div class="wrapSpanForm">

                    </div>
                    <div class="wrapInputSpan">
                        <div class="wrapInputAndText">
                            <div class="textTopInput">
                                Address, etc...
                            </div>
                            <div class="wrapOption">
                                <div class="inforCity">
                                    <input type="text" name="address"  value="{{ old('address') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="itemPost">
                    <div class="wrapSpanForm">

                    </div>
                    <div class="wrapInputSpan">
                        <div class="wrapInputAndText">
                            <div class="textTopInput">
                                Building name
                            </div>
                            <div class="wrapOption">
                                <div class="inforCity">
                                    <input type="text" name="builDing" value="{{ old('builDing') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="itemPost">
                    <div class="wrapSpanForm">
                        <span>
                            BMI Index
                        </span>
                        <br>
                    </div>
                    <div class="wrapInputSpan">
                        <div class="wrapInputAndText">
                            <div class="textTopInput">
                                Please enter the height (cm)
                            </div>
                            <input type="number" name="height" id="height" class="uintTextBox2"/>&nbsp;<span class="errmsg2" style="color: red;font-weight:100"></span>

                        </div>
                    </div>
                </div>
                <div class="itemPost">
                    <div class="wrapSpanForm">

                    </div>
                    <div class="wrapInputSpan">
                        <div class="wrapInputAndText">
                            <div class="textTopInput">
                                Weight (KG)
                            </div>
                            <div class="wrapOption">
                                <div class="inforCity">
                                    <input type="number" name="weight" id="weight"  value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="itemPost">
                    <div class="wrapSpanForm">

                    </div>
                    <div class="wrapInputSpan">
                        <div class="wrapInputAndText">
                            <div class="textTopInput">
                                BMI
                            </div>
                            <div class="wrapOption">
                                <div class="inforCity">
                                    <input type="text" name="bmi" value="" id="bmi">
                                </div>
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
    </div>
@endsection
@section('script')

<script>
    $(document).on("change keyup blur", "#weight", function() {
        var main = $('#height').val();
        var width = $('#weight').val();
        var met = main / 100;

        var discont = width / ((met) * (met));
        $('#bmi').val(discont);
    });
</script>
<script src="{{ asset('js/client/information.js') }}">

@endsection
