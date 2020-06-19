@extends('layouts.app')
@section('css')
    <link href="{{ url('css/thi.css') }}" type="text/css" rel="stylesheet">
    <style type="text/css">
        .clock {
            display: flex;
            justify-content: center;
        }
        #s_val {
            width: 153px;
            border: 2px solid blue;
            height: 51px;
            border-radius: 5px;
            font-size: 40px;
            color: red;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <p>Tổng tài sản<br><span id="total_score">0</span></p>
        <a href="{{ url('tienthuong') }}"><img class="aa" src="img/AiLaTrieuPhu/frame2@2x.png" alt=""></a>
        <a id="thoat" href="javascript:void(0)"><img class="close" src="img/AiLaTrieuPhu/close.png" alt=""></a> 
        <div class="clock">
            <div id="s_val"></div>
        </div>
    </div>
    
    <img class="icon1" src="img/AiLaTrieuPhu/app@3x.png" alt="">
    <div class="cauhoi">
        <p class="money"></p>
        <p class="title question"></p>
        <div class="dapan">
            <a class="option" href="javascript:void(0)"><button class="btn p1 answer_A"><span>A:</span></button></a> 
            <a class="option" href="javascript:void(0)"><button class="btn p2 answer_B"><span>B:</span><button></button></a> 
            <a class="option" href="javascript:void(0)"><button class="btn p3 answer_C"><span>C:</span></button></a>
            <a class="option" href="javascript:void(0)"><button class="btn p4 answer_D"><span>D:</span></button></a>
        </div>
        
    </div>
    <div class="icon">
        <a href="javascript:void(0)"><img src="img/AiLaTrieuPhu/menu.png" alt=""></a>
        <a href="javascript:void(0)"><img id="help_5050" src="img/AiLaTrieuPhu/help1@3x.png" alt=""></a>
        <a href="javascript:void(0)"><img id="help_idea" src="img/AiLaTrieuPhu/help2@3x.png" alt=""></a>
        <a href="javascript:void(0)"><img src="img/AiLaTrieuPhu/help3@3x.png" alt=""></a>
        <a href="javascript:void(0)"><img src="img/AiLaTrieuPhu/settings.png" alt=""></a>              
    </div>
    <!-- <div class="clock">
        <div id="s_val"></div>
    </div> -->

    <script type="text/javascript">
        $(document).ready(function() {
            var email = "{{ $email }}"
            console.log(email)
            var questionList = []
            var curQuestion
            var totalScore = 0
            var questionScore = 200;
            var stopClock = true;
            var s = 31;

            var updateScore = async function() {
                await $.ajax({
                    url : baseApiUrl + "updateScore",
                    type : "POST",
                    data : {
                        email : email,
                        score:  totalScore
                    },
                    success : function (result){
                        console.log(result)
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(xhr)
                    }
                });
            }

            async function delay(delayInms) {
              return new Promise(resolve  => {
                setTimeout(() => {
                  resolve(2);
                }, delayInms);
              });
            }

            var startClock = async function() {
                if (s == 0) {
                    const answer = curQuestion.answer
                    $(".btn").each(function() {
                        const btnValue = $(this).attr("data-value")
                        if (btnValue == answer) {
                            $(this).addClass("true-answer")
                        }
                    })

                    await updateScore();
                    await delay(1500);
                    window.location.replace(baseLaravelUrl + "/tienthuong/" + totalScore)
                    return
                }
                if (stopClock != true) {
                    s--
                    $("#s_val").html(s)
                }
                setTimeout(function(){
                    startClock(s);
                }, 1000);
            }

            // next sang question khác
            var updateNewQuestion = function(curQuestion) {
                console.log(curQuestion);
                $(".question").html(curQuestion.content)
                $(".p1").html("<span>A:</span>" + curQuestion.A)
                $(".p1").attr("data-value", curQuestion.A)
                $(".p2").html("<span>B:</span>" + curQuestion.B)
                $(".p2").attr("data-value", curQuestion.B)
                $(".p3").html("<span>C:</span>" + curQuestion.C)
                $(".p3").attr("data-value", curQuestion.C)
                $(".p4").html("<span>D:</span>" + curQuestion.D)
                $(".p4").attr("data-value", curQuestion.D)
                questionScore = 100
                $('.money').html("$100")
                // if (curQuestion.level == 1) {
                //     questionScore = 100
                //     $('.money').html("$100")
                // }
                // if (curQuestion.level == 2) {
                //     questionScore = 500
                //     $('.money').html("$500")
                // }
                // if (curQuestion.level == 2) {
                //     questionScore = 1000
                //     $('.money').html("$1000")
                // }
                s = 31
                stopClock = false;
            }

            // gọi dữ liệu lần đầu ( lấy tất cả các câu hỏi về)
            $.ajax({
                url : baseApiUrl + "getQuestion",
                type : "GET",
                success : function (result){
                    questionList = result.data
                    curQuestion =  questionList[Math.floor(Math.random() * questionList.length)];
                    updateNewQuestion(curQuestion)
                    startClock()
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr)
                }
            });


            // xử lý sự kiện người chơi chọn đáp án
            $(".option").on("click", async function(e) {
                if(confirm("Are you sure?")){
                    e.preventDefault();
                    const btn = $(this).find("button")
                    const value = btn.attr("data-value")
                    stopClock = true;
                    if (value == curQuestion.answer) {
                        btn.addClass("true-answer");
                        await delay(1500);
                        await btn.removeClass("true-answer");
                        if (questionList.length == 0) {
                            alert("bạn đã trở thành triệu phú =))")
                            updateScore()
                            await delay(1500);
                            window.location.replace(baseLaravelUrl + "/tienthuong/" + totalScore)
                        }
                        curQuestion =  questionList[Math.floor(Math.random() * questionList.length)];
                        updateNewQuestion(curQuestion);   
            
                        questionList = questionList.filter(function(question) {
                            if(question != null){
                                return question._id != curQuestion._id
                            }
                            return false;
                        })
                        totalScore += questionScore      
                        $('#total_score').text(totalScore)
                    } else {
                        await $(this).find("button").addClass("false-answer");
                        const answer = curQuestion.answer
                        $(".btn").each(function() {
                            const btnValue = $(this).attr("data-value")
                            if (btnValue == answer) {
                                $(this).addClass("true-answer")
                            }
                        })
                        updateScore()
                        await delay(1500);
                        window.location.replace(baseLaravelUrl + "/tienthuong/" + totalScore)
                    }
                }
            });

            $("#help_5050").on("click", async function(e) {
                const{A, B, C, D, answer} = curQuestion;
                let answers =  {A,B,C,D};
                for (var prop in answers) {
                    if (Object.prototype.hasOwnProperty.call(answers, prop)) {
                        if(answers[prop] == answer){
                            delete answers[prop]
                        }
                    }
                }
                var keys = Object.keys(answers);
                keys.sort(function(a,b) {return Math.random() - 0.5;});
                $(`.answer_${keys[0]}`).html('<span>' + keys[0] + ':</span>');
                $(`.answer_${keys[1]}`).html('<span>' + keys[1] + ':</span>');
                $("#help_5050").css('opacity', 0.3).css('pointer-events', 'none');
            });

            $("#help_idea").on("click", async function(e) {
                alert("Đáp án của khán giả là: " + curQuestion.answer)
                $("#help_idea").css('opacity', 0.3).css('pointer-events', 'none');
            });

            $("#thoat").on("click", async function(e) {
                if(confirm("Bạn có chắc chắn muốn thoát?")){
                    window.location.replace(baseLaravelUrl + "/home")
                }
            });
        })
    </script>
@endsection