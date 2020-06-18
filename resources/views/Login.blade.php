<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Ai Là Triệu Phú</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <span><a href="Splash.html"><i class="fas fa-times"></i></a></span>
    <div class="contrainer">
        <div class="card">
            <nav>
                <div class="nav nav-tabs">
                  <a class="nav-item nav-link active" style="padding:10px 59px;border-radius: 15px 0px 0px 0px; font-weight: 600; color:blue;font-size: 20px;" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Đăng ký</a>
                  <a class="nav-item nav-link" style="padding:10px 50px; font-weight: 600;border-radius: 0px 15px 0px 0px; color:blue;font-size: 20px;" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Đăng nhập</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent" >
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <form>
                        <div class="form-group">
                            <small id="emailHelp" class="form-text text-muted">với tài khoản mạng xã hộ của bạn</small>
                           <p><button class="fb">f</button></p> 
                           <small id="emailHelp" class="form-text text-muted">hoặc</small>
                           <div class="field">
                                <div class="input-field">
                                    <i class="fas fa-user"></i>
                                    <input name="text1" id="register-username" type="text" value="" placeholder="Tên đăng nhập" required="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="input-field">
                                    <i class="far fa-envelope"></i>
                                    <input name="password" id="register-email" type="mail" placeholder="Email">
                                </div>
                            </div>
                            <div class="field">
                                <div class="input-field">
                                    <i class="fas fa-lock"></i>
                                    <input name="password" id="register-password" type="Password" placeholder="Mật khẩu">
                                </div>
                            </div>  
                            <div class="check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <small style="color: gray;">Tôi muốn nhận thư thông báo và quảng cáo từ Ai là triệu phú</small>
                            </div>
                            <button class="tk">Tạo tài khoản</button>
                            <br><small>Đã có tài khoản? <a href="#nav-home" style="color:#0f1899;font-weight:600;">Đăng nhập</a></small>
                        </div>                      
                    </form>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <form>
                        <div class="form-group .login-form">
                            <small id="emailHelp" class="form-text text-muted">với tài khoản mạng xã hộ của bạn</small>
                           <p><button class="fb">f</button></p> 
                           <small id="emailHelp" class="form-text text-muted">hoặc</small>
                           <div class="field">
                                <div class="input-field">
                                    <i class="fas fa-user"></i>
                                    <input name="text1" id="login-email" type="text" value="" placeholder="Tên đăng nhập/Email" required="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="input-field">
                                    <i class="fas fa-lock"></i>
                                    <input class="aa" name="password" id="login-password" type="password" placeholder="Mật khẩu">
                                    <i class="far fa-eye"></i>
                                    
                                </div>
                            </div>
                            <div class="check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <small style="color: gray;">Ghi nhớ tôi</small>
                                <small class="bb"><a href="#" style="color:#0f1899;font-weight:600;">Quên mật khẩu?</a></small>
                            </div>
                            <button class="DN">Đăng nhập</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        var baseApiUrl =  "https://a-l-t-p.herokuapp.com/api/";
        var baseLaravelUrl = "{{ url('/') }}"
        $(document).ready(function() {
            $(".DN").on("click", function(event) {
                event.preventDefault();
                $.ajax({
                    url : baseApiUrl + "login",
                    type : "POST",
                    data : {
                        email : $('#login-email').val(),
                        password:  $('#login-password').val()
                    },
                    success : function (result){
                        if (result.error != undefined && result.error == false) {
                            alert("Đăng nhập thành công!")
                            window.location = baseLaravelUrl + "/login/" + result.data[0].email
                        }
                        console.log(result)
                        alert(result.message)
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(xhr)
                    }
                });
            });

            $(".tk").on("click", function(event) {
                event.preventDefault();
                $.ajax({
                    url : baseApiUrl + "register",
                    type : "POST",
                    data : {
                        username: $('#register-username').val(),
                        email : $('#register-email').val(),
                        password:  $('#register-password').val()
                    },
                    success : function (result){
                        if (result.error != undefined && result.error == false) {
                            alert("Đăng ký tài khoản thành công. Đăng nhập lại để chơi game")
                            window.location = baseLaravelUrl + "/login"
                        }
                        alert(result.message)
                        console.log(result)
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(xhr)
                    }
                });
            });
        })
    </script>   
</body>