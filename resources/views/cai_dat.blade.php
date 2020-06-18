@extends('layouts.app')
@section('css')
    <link href="{{ url('css/cai_dat.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="item">
            <span><a href="{{ url('/home') }}"><i class="fas fa-times"></i></a></span>
            <div class="item1">
                <h1>CÀI ĐẶT</h1>
            </div>
            <div class="item2">
                <p>Âm thanh <input type="checkbox"></p>
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

