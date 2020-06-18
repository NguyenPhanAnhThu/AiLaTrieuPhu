<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Ai Là Triệu Phú</title>
    <link rel="stylesheet" type="text/css" href="css/forgotPassword.css">
</head>
<body>
    <div class="contrainer">
        <div class="card">
            <form>
                <div class="form-group">
                <p class="MK">Đổi Mật khẩu</p>
                <div class="field">
                    <div class="input-field">
                        <i class="far fa-envelope"></i>
                        <input name="email" id="myInput" type="mail" placeholder="Email">
                    </div>
                </div>
                <div class="field">
                    <div class="input-field">
                        <i class="fas fa-key"></i>
                        <input name="password" id="myInput" type="Password" value="" placeholder="Mật khẩu hiện tại" required="">
                    </div>
                </div>
                <div class="field">
                    <div class="input-field">
                        <i class="fas fa-unlock"></i>
                        <input name="newPast1" id="myInput" type="Password" placeholder="Mật khẩu mới">
                    </div>
                </div>  
                <div class="field">
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input name="newPast2" id="myInput" type="Password" placeholder="Nhập lại mật khẩu">
                    </div>
                </div>  
                <button class="td">Thay Đổi</button>
                <button class="thoat">Thoát</button>
            </div>                      
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        var baseApiUrl =  "https://a-l-t-p.herokuapp.com/api/";
        var baseLaravelUrl = "{{ url('/home') }}"
        $(document).ready(function() {
            $(".td").on("click", function(event) {
                event.preventDefault();
                const email = $('input[name=email]').val()
                const password =  $('input[name=password]').val()
                const newPass1 = $('input[name=newPast1]').val()
                const newPass2 = $('input[name=newPast2]').val()
                if (newPass1 != newPass2) {
                    alert("Mật khẩu mới nhập lại chưa đúng");
                    return
                }

                $.ajax({
                    url : baseApiUrl + "changePassword",
                    type : "POST",
                    data : {
                        email : email,
                        password:  password,
                        newPass1: newPass1,
                        newPass2: newPass2,
                    },
                    success : function (result){
                        if (result.error != undefined && result.error == false) {
                            alert("đổi password thành công");
                            window.location = baseLaravelUrl
                        }
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