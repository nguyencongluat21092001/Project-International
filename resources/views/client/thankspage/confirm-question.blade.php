@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/thanksPage.css') }}">
@endsection
@section("content")
    <div class="container">
        <div id="thank">
            <h1 class="thank-title">Fitness Daily</h1>
            <h5 class="thank-desc">Thank you for sending!</h5>
            <h7 class="thank-desc">Now click on 'Return to My Page' to do the exercises.</h7>
            <div class="form-link form-link-pt">
                <a href="{{ route('myPage') }}" class="button button-first">Return to My Page</a>
                <div></div>
                <a href="{{ route('home') }}" class="button">Return to TOP</a>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
