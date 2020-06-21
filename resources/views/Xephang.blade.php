@extends('layouts.app')
@section('css')
    <link href="{{ url('css/xephang.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="item">
            <span><a href="{{ url('/home') }}"><i class="fas fa-times"></i></a></span>
            <div class="item1">
                <h1>BẢNG XẾP HẠNG</h1>
                <div class="item2">
                    <ul class="ul1">
                        <li>Hạng</li>
                        <li class="li2">Tên người chơi</li>
                        <li>Điểm cao nhất</li>
                    </ul>
                    <ul class="rank0">
                        <li><img src="img/AiLaTrieuPhu/cup1@3x.png" alt=""><i class="far fa-user-circle"></i></li>
                        <li class="li2"></li>
                        <li class="score"></li>
                    </ul>
                    <ul class="rank1">
                        <li><img src="img/AiLaTrieuPhu/cup2@3x.png" alt=""><i class="far fa-user-circle"></i></li>
                        <li class="li2"></li>
                        <li class="score"></li>
                    </ul>
                    <ul class="rank2">
                        <li><img src="img/AiLaTrieuPhu/cup3@3x.png" alt=""><i class="far fa-user-circle"></i></li>
                        <li class="li2"></li>
                        <li class="score"></li>
                    </ul>
                    <ul class="rank3">
                        <li class="li1">4<i class="far fa-user-circle"></i></li>
                        <li class="li2" ></li>
                        <li class="score"></li>
                    </ul>
                    <ul class="rank4">
                        <li class="li1">5<i class="far fa-user-circle"></i></li>
                        <li class="li2"></li>
                        <li class="score"></li>
                    </ul>
                    <ul class="rank5">
                        <li class="li1">6<i class="far fa-user-circle"></i></li>
                        <li class="li2"></li>
                        <li class="score"></li>
                    </ul>
                    <ul class="rank6">
                        <li class="li1">7<i class="far fa-user-circle"></i></li>
                        <li class="li2"></li>
                        <li class="score"></li>
                    </ul>
                </div>
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
    <script type="text/javascript">
        $(document).ready(function() {
            var userList = []
            $.ajax({
                url : baseApiUrl + "getUser",
                type : "GET",
                success : function (result){
                    userList = result.data
                    userList = userList.sort(function(a, b) {
                        return b.score - a.score
                    })
                    console.log(userList)
                    for (var i = 0; i <= 6; i++) {
                        $(".rank" + i).find('.li2').html(userList[i].email)
                        $(".rank" + i).find('.score').html(userList[i].score)
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr)
                }
            });
        });
    </script>
@endsection