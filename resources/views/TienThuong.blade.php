@extends('layouts.app')
@section('css')
    <link href="{{ url('css/tiengthuong.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <p>Tổng tài sản<br>0</p>
        <a href=""><img class="aa" src="{{ url('img/AiLaTrieuPhu/frame2@2x.png') }}" alt=""></a>
        <a href=""><img class="close" src="{{ url('img/AiLaTrieuPhu/close.png') }}" alt=""></a> 
    </div>
    <div class="item">
        <span><a href="{{ url('/home') }}"><i class="fas fa-times"></i></span> 
        <div class="item1">
            <h1>MỨC TIỀN THƯỞNG</h1>
            <div class="item2">
                <p class="money1">$1,500 <br><span>150k</span></p>
                <ul class="money2">
                    <li class="li2">$1,300</li>
                    <li>130k</li>
                </ul>
                <ul class="money3">                        
                    <li class="li2">$1,000</li>
                    <li>100k</li>
                </ul>
                <ul class="money4">
                    <li class="li2">$800</li>
                    <li>80</li>
                </ul>
                <ul class="money5">
                    <li class="li2" >$600</li>
                    <li>60k</li>
                </ul>
                <ul class="money6">
                    <li class="li2">$400</li>
                    <li>40k</li>
                </ul>
                <ul class="money7">
                    <li class="li2">$200</li>
                    <li>20k</li>
                </ul>
                <ul class="money8">
                    <li class="li2">$100</li>
                    <li>10k</li>
                </ul>
            </div> 
        </div>
    </div>
    <div class="icon">
        <a href=""><img src="{{ url('img/AiLaTrieuPhu/menu.png') }}" alt=""></a>
        <a href=""><img src="{{ url('img/AiLaTrieuPhu/help1@3x.png') }}" alt=""></a>
        <a href=""><img src="{{ url('img/AiLaTrieuPhu/help2@3x.png') }}" alt=""></a>
        <a href=""><img src="{{ url('img/AiLaTrieuPhu/help3@3x.png') }}" alt=""></a>
        <a href=""><img src="{{ url('img/AiLaTrieuPhu/settings.png') }}" alt=""></a>              
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            var money = Number("{{ $money }}")
            var setClass = function() {
                if (money < 800 ) {
                    return
                }
                if (money < 900 ) {
                    $(".money8").addClass("true-money")
                    return
                }
                if (money < 1000 ) {
                    $(".money7").addClass("true-money")
                    return
                }
                if (money < 1200 ) {
                    $(".money6").addClass("true-money")
                    return
                }
                if (money < 1400 ) {
                    $(".money5").addClass("true-money")
                    return
                }
                if (money < 1600 ) {
                    $(".money4").addClass("true-money")
                    return
                }
                 if (money < 1800 ) {
                    $(".money3").addClass("true-money")
                    return
                }
                if (money < 2000 ) {
                    $(".money2").addClass("true-money")
                    return
                }
                if (money >= 2000 ) {
                    $(".money1").addClass("true-money")
                    return
                }
            }

            setClass()


        })
    </script>
@endsection
