@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/question-list.css') }}">
@endsection
@section("content")
<form action=" {{ route('postQuestionPageTwo') }} " method="POST">
    @csrf
    @method('POST')
    <div class="container container-full-w">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <div class="content-header">
                        <h1 class="content-title">
                            List Questions
                        </h1>
                        <p class="content-desc">
                            What can you do below?Please select the applicable item
                        </p>
                    </div>
                    <!-- Form -->
                    <div class="content-body">
                        <form class="question">
                            <table class="table table-bordered hide-on-mb">
                                <thead>
                                    <tr>
                                        <td rowspan="2" class="question-w-40"></td>
                                        <td class="table-w" colspan="2">Please select Yes or No answer</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">yes</td>
                                        <td>No</td>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Config::get('dataquestion.title_question_page_2') as $key=>$item)
                                        <tr>
                                            <td>{{ $item }}</td>
                                            <td>
                                                <label style="width: 100%; text-align: center; cursor: pointer;" for="anwser2{{ $key }}"><input type="radio" name="answer2[{{ $key }}][1]" value="Yes" id="anwser2{{ $key }}"></label>
                                            </td>
                                            <td>
                                                <label style="width: 100%; text-align: center; cursor: pointer;" for="anwser3{{ $key }}"><input type="radio" name="answer2[{{ $key }}][1]" value="No" id="anwser3{{ $key }}"></label>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="question-mobile-list hide">
                                <!-- Question mobile -->
                               <ul class="question-mobile">
                                <li class="question-title">
                                    Do you exercise every day?
                                </li>
                               <li>
                                  <span class="question-child">Please select Yes or No answer？</span>
                                  <ul>
                                      <li><input type="radio" name="answer2[1][1]" value="Yes"> <label for="">Yes</label></li>
                                      <li><input type="radio" name="answer2[1][1]" value="No"> <label for="">No</label></li>
                                  </ul>
                               </li>

                               </ul>
                               <!-- Question mobile -->
                               <ul class="question-mobile">
                               <li class="question-title">
                                   Do you have three main meals 1 side?
                               </li>
                               <li>
                                   <span class="question-child">Please select Yes or No answer？</span>
                                   <ul>
                                       <li><input type="radio" name="answer2[2][1]" value="Yes "> <label for="">Yes</label></li>
                                       <li><input type="radio" name="answer2[2][1]" value="No"> <label for="">No</label></li>
                                   </ul>
                               </li>

                               </ul>
                               <!-- Question mobile -->
                               <ul class="question-mobile">
                                   <li class="question-title">
                                       Do you usually eat spicy food?
                                   </li>
                                   <li>
                                       <span class="question-child">Please select Yes or No answer？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[3][1]" value="Yes"> <label for="">Yes</label></li>
                                           <li><input type="radio" name="answer2[3][1]" value="No"> <label for="">No</label></li>
                                       </ul>
                                   </li>

                               </ul>
                               <!-- Question mobile -->
                               <ul class="question-mobile">
                                   <li class="question-title">
                                       Do you usually eat sweets?
                                   </li>
                                   <li>
                                       <span class="question-child">Please select Yes or No answer？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[4][1]" value="Yes"> <label for="">Yes</label></li>
                                           <li><input type="radio" name="answer2[4][1]" value="No"> <label for="">No</label></li>
                                       </ul>
                                   </li>

                               </ul>
                               <!-- Question mobile -->
                               <ul class="question-mobile">
                                   <li class="question-title">
                                       Do you eat a lot of green vegetables?
                                   </li>
                                   <li>
                                       <span class="question-child">Please select Yes or No answer？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[5][1]" value="Yes"> <label for="">Yes</label></li>
                                           <li><input type="radio" name="answer2[5][1]" value="No"> <label for="">No</label></li>
                                       </ul>
                                   </li>

                               </ul>
                               <!-- Question mobile -->
                               <ul class="question-mobile">
                                   <li class="question-title">
                                       Do you sleep enough 8 hours a day?
                                   </li>
                                   <li>
                                       <span class="question-child">Please select Yes or No answer？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[6][1]" value="Yes"> <label for="">Yes</label></li>
                                           <li><input type="radio" name="answer2[6][1]" value="No"> <label for="">No</label></li>
                                       </ul>
                                   </li>

                               </ul>
                               <!-- Question mobile -->
                               <ul class="question-mobile">
                                   <li class="question-title">
                                       Do you drink enough 1.5l of water per day?
                                   </li>
                                   <li>
                                       <span class="question-child">Please select Yes or No answer？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[7][1]" value="Yes"> <label for="">Yes</label></li>
                                           <li><input type="radio" name="answer2[7][1]" value="No"> <label for="">No</label></li>
                                       </ul>
                                   </li>

                               </ul>
                               <!-- Question mobile -->
                               <ul class="question-mobile">
                                   <li class="question-title">
                                       Do you eat fruit every day?
                                   </li>
                                   <li>
                                       <span class="question-child">Please select Yes or No answer？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[8][1]" value="Yes"> <label for="">Yes</label></li>
                                           <li><input type="radio" name="answer2[8][1]" value="No"> <label for="">No</label></li>
                                       </ul>
                                   </li>

                               </ul>
                               <!-- Question mobile -->
                               <ul class="question-mobile">
                                   <li class="question-title">
                                       Are you picky?
                                   </li>
                                   <li>
                                       <span class="question-child">Please select Yes or No answer？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[9][1]" value="Yes"> <label for="">Yes</label></li>
                                           <li><input type="radio" name="answer2[9][1]" value="No"> <label for="">No</label></li>
                                       </ul>
                                   </li>

                               </ul>
                               <!-- Question mobile -->
                               <ul class="question-mobile">
                                   <li class="question-title">
                                       Do you have a stomachache?
                                   </li>
                                   <li>
                                       <span class="question-child">Please select Yes or No answer？</span>
                                       <ul>
                                           <li><input type="radio" name="answer2[10][1]" value="Yes"> <label for="">Yes</label></li>
                                           <li><input type="radio" name="answer2[10][1]" value="No"> <label for="">No</label></li>
                                       </ul>
                                   </li>

                               </ul>
                            </div>
                            <div class="form-link">
                                <button class="backButton" onclick="goBack()" type="button">Back</button>
                                <button class="form-link-primary" type="submit">Continue</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section("script")

@endsection
