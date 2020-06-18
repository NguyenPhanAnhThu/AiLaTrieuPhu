@extends('layouts.app')
@section('css')
    <link href="{{ url('css/Splash.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <img class="icon1" src="img/AiLaTrieuPhu/app@3x.png" alt="">
        <div>
            <a href="{{ url('login') }}"><button class="aa">Đăng nhập</button></a>
        </div>
        <div>
            <a href="{{ url('thi') }}"><button class="bb">Chơi ẩn danh</button></a>
        </div>
    </div>
@endsection