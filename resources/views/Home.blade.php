@extends('layouts.app')
@section('css')
    <link href="{{ url('css/home.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <img class="icon1" src="img/AiLaTrieuPhu/app@3x.png" alt="">
        <div>
            <a href="{{ url('thi') }}"><button>CHƠI NGAY</button></a>
        </div>
        <div class="icon">
            <p>Tổng tài sản <br>0</p>
            <a href="{{ url('xephang') }}"><img src="img/AiLaTrieuPhu/cup0.png" alt=""></a>
            <a href="{{ url('profile') }}"><img src="img/AiLaTrieuPhu/user.png" alt=""></a>
            <a href="{{ url('cai_dat') }}"><img src="img/AiLaTrieuPhu/settings.png" alt=""></a>
            <img class="aa" src="img/AiLaTrieuPhu/frame2@2x.png" alt="">                 
        </div>
    </div>
@endsection


 