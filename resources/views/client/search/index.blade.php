@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/searchid.css') }}">
@endsection
@section("content")
<div id="searchid">
    <div class="container">
        <div class="login">
            <h1 class="login-title">Fitness Daily</h1>
            <p class="login-desc">Member ID search</p>

            <form action="{{ route('postSearchId') }}" class="form-login form-search" method="POST">
                @csrf
                @method('POST')
                <div class="form-row">
                    <label for="" class="form-label">Name</label>
                    <div class="form-input">
                        <input type="text" name="name">

                    </div>
                </div>
                <div class="form-row">
                    <label for="" class="form-label">
                        Inquiry Number
                        <p style="font-size: 14px" class="mb-0">How to check<a href="">Here</a></p>
                    </label>
                    <div class="form-input">
                        <input type="text" name="code">

                    </div>
                </div>
                <div class="form-row">
                    <label for="" class="form-label">
                        mail address
                        <p style="font-size: 14px" class="mb-0">Registered with Caromama Plus
                        </p>
                    </label>
                    <div class="form-input">
                        <input type="text" name="email">

                    </div>
                </div>
                    <p class="search-error">
                        @if($errors->any())
                            <div class="error"> {!! $errors->first() !!} </div>
                        @endif
                    </p>
                <button class="button">Search for</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/client/searchform.js') }}"></script>
@endsection
