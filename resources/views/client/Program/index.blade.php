@extends('client.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/client/mypage.css')}}">
@endsection
@section("content")
<div class="show-header">
    <div class="container -flush">
        <div class="info has-action col-xl-5 col-md-5 col-sm-12 col-xs-12 " >
            <div class="video-details-wrapper video-detail-wrapper">
                <div class="video-details">
                    <h2>WORKOUT DETAILS</h2>
                </div>
                <div class="stats">
                    <ul class="detail-list">
                        <li>Duration: 20 Minutes</li>
                        <li>Calorie Burn: 97-153</li>
                        <li>Difficulty: 3/5</li>
                        <li>Equipment: No Equipment</li>
                        <li>Training Type: Low Impact, Pilates, Toning</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="media">
            <div class="responsive-video col-xl-7 col-md-7 col-sm-12 col-xs-12 " id="player">
                <iframe width="710" height="388" src="{{ $video->link_id }}"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
                </iframe>
           </div>
        </div>
    </div>
</div>
<div class="col-xl-9 content" >
    <h3 class="title"><b>{{ $video->title }}</b></h3>
    <span style="font-size: 1.0rem; line-height: 2.5rem;padding: 0 0 3.2rem">
        <p> {{ $video->content }}
</p>
        Otherwise, any other requests for training styles? Let me know!<br>

        Thank you for working out with me,<br>

        Kelli</span>
</div>
<input id="input1" type="hidden" value="" />
@endsection
