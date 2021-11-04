@extends('admin.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/alogin.css') }}">
@endsection
@section("content")
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                            <div class="card-body">
                                <form action="{{ route('post.login.admin') }}" method="POST" class="form-login">
                                    @csrf
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                                        <input class="form-control py-4" name="email" type="text" placeholder="Enter email address" />
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control py-4" name="password" type="password" placeholder="Enter password" />
                                    </div>
                                    <div class="form-row">
                                        @if($errors->any())
                                            <div class="error"> {!! $errors->first() !!} </div>
                                        @endif
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/ad/login.js') }}"></script>
@endsection
