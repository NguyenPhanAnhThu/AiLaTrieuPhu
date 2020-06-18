@extends('layouts.app')
@section('css')
    <link href="{{ url('css/profile.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="item">
            <span class="one"><a href="{{ url('/home') }}"><i class="fas fa-times"></i></a></span>
            <div class="item1">
                <h1>TÀI KHOẢN</h1>
            </div>
            <div class="item3">
                <a class="icon2" href=""><i class="fas fa-camera-retro"></i></a>
                <a class="icon1" href=""><i class="fas fa-user-alt"></i></a>
                <a class="icon3" href=""><i class="far fa-edit"></i></a>
            </div>
            <div class="item2">
                <p>{{ __($email) }}</p> 
            </div>
        </div>
    </div>
    <div class="icon">
        <p>Tổng tài sản <br>0</p>
        <a href=""><img src="img/AiLaTrieuPhu/cup0.png" alt=""></a>
        <a href=""><img src="img/AiLaTrieuPhu/user.png" alt=""></a>
        <a href=""><img class="caidat" src="img/AiLaTrieuPhu/settings.png" alt=""></a>
        <img class="aa" src="img/AiLaTrieuPhu/frame2@2x.png" alt="">
    </div>
@endsection