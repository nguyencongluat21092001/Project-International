@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/login.css') }}">
@endsection
@section("content")

<div id="login">
    <div class="container">
        <div class="login">
            <h1 class="login-desc" style="color: white">Member Login</h1>
            <form method="POST" action="{{ route('post.login') }}" class="form-login">
                @csrf
                <div class="form-row">
                    <label  class="form-label" style="color: white">ID</label>
                    <div class="form-input">
                        <input type="text" name="code">
                    </div>
                </div>
                <div class="form-row">
                    <label for="" class="form-label"></label>
                    <div class="form-input">
                        <a href="{{ route('search') }}" class="note" style="color: white">Did you forgot ID?</a>
                    </div>
                </div>
                <div class="form-row">
                    <label for="" class="form-label" style="color: white">Password</label>
                    <div class="form-input">
                        <input type="password" name="password">
                    </div>
                </div>
                <div class="form-row">
                    @if($errors->any())
                        <div class="error"> {!! $errors->first() !!} </div>
                    @endif
                </div>
                <button type="submit" class="button">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/client/login.js') }}"></script>
@endsection
