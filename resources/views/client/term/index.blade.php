@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/term.css') }}">
@endsection
@section("content")
<div id="term">
    <div class="container">
        <div class="term">
            <h1 class="term-title">
                Fitness Daily
            </h1>
            <p class="term-desc">Terms of use</p>
            <div class="term-content">
            <p> 1.Because the details of the health management service of the clinic and the examination information are sensitive information, I have
                As notified by the examination agency about this processing of personal information, I fully understand and agree to this. </p><br>

            <p> 2.Purpose of providing personal information: To provide health care services to those who require self-administration and
                Take precautions as well as those with disease (and suspected disease), to provide post-examination management based on cancer screening results, as well as to provide post-examination management related to TB pulmonary tuberculosis. </p><br>

            <p>3.Time to store and use personal information: 2 years  </p><br>

            <p> 4.Your personal information will be used only within the medical scope and will be kept strictly confidential under the Information Protection Law.
                Personal and Basic Law on Health Exam. This information will not be used for other purposes or provided to other agencies. </p><br>

            <p>  5.You have the right to refuse to give personal information to a third party, in which case you may be excluded.
                from the list of beneficiaries of health management services of the health station.</p><br>
            <p> 6.We love you to keep up to date with accurate personal information, health information and your fitness needs. </p><br>
            </div>

            <p class="term-confirm">Do you agree with the above terms and conditions？</p>
            <div class="form-link form-link-pt">
                <button onclick="window.location.href=' {{ route('home') }}'" type="button">Do not </button>
                <button class="form-link-primary" type="button"  onclick="window.location.href=' {{ route('post.term') }}'">I do</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/client/login.js') }}"></script>
@endsection
