@extends('client.app')
@section('css')
@endsection
@section("content")
    <div class="container" style="padding: 50px;text-align: center" >
        <div class="row">
            <div class="left col-xl-6" >

                    <div class="title">
                       <h3>Have you practiced hard in the past 3 months?</h3>
                        <h4>Please, tell us about your body stats!</h4>
                    </div>

                    <img src="./images/pic15.jpg">

            </div>
            <div class="right col-xl-6" style="box-sizing: border-box;background: linear-gradient(to bottom, #72d0f4 25%, #3399ff 79%); ">
                <form NAME="myform" action="{{ route('updateBmi') }}" method="POST" style="padding: 50px">
                    @csrf
                    @method('post')
                    <h1><span class="title" style="float: left !important;">Enter Your Height and Weight </span></h1>
                    <div class="row" style="padding-bottom: 10px">
                        <div class="col-xl-12">
                            <div class="input-group">
                                Weight(kg)
                                <input type="text" id="number1" class="form-control" aria-label="Amount (to the nearest dollar)" value="" onkeyup="sum()"/>
                            </div>
                        </div>
                    </div>
                    <div></div>
                    <div class="row" style="padding-bottom: 10px">
                        <div class="col-xl-12">
                            <div class="input-group">
                                <span class="input-group-addon">Height(cm)   </span>
                                <input type="text" id="number2" class="form-control" aria-label="Amount (to the nearest dollar)" value="" onkeyup="sum()"/>
                            </div>
                        </div>
                    </div>
                    <div></div>
                    <div class="row" style="padding-bottom: 10px">
                        <div class="col-xl-8">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"> Your BMI is </span>
                                <input style="padding-left: 10px" type="text" class="form-control" id="result" name="result" aria-describedby="basic-addon1" readonly>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    function sum() {
            var num1 = document.getElementById('number1');
            var num2 = document.getElementById('number2');
            if (num1.value !== '')
            {
                if (num2.value !== '') {
                  var  a= parseInt(num1.value,0);
                  var b= parseInt(num2.value,0);
                   var sum = (a/(b*b))*10000;
                    document.getElementById('result').value = sum;
                }
              }
        }
</script>
@endsection
