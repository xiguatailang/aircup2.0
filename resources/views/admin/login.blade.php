<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/plug/auth.css">
</head>

<body>
<div class="lowin lowin-blue">
    <div class="lowin-brand">
        <img src="{{ URL::asset('/') }}image/logo.png" alt="logo">
    </div>
    <div class="lowin-wrapper">
        <div class="lowin-box lowin-login">
            <div class="lowin-box-inner">
                <form>
                    <p>Sign in to continue</p>
                    <div class="lowin-group">
                        <label>Email <a href="#" class="login-back-link">Sign in?</a></label>
                        <input type="email" autocomplete="email" name="email" class="lowin-input user_email">
                    </div>
                    <div class="lowin-group password-group">
                        <label>Password <a href="#" class="forgot-link">Forgot Password?</a></label>
                        <input type="password" name="password" autocomplete="current-password" class="lowin-input user_pd">
                    </div>
                    <button class="lowin-btn login-btn">
                        Sign In
                    </button>

                    <div class="text-foot">
                        Don't have an account? <a href="" class="register-link">Register</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="lowin-box lowin-register">
            <div class="lowin-box-inner">
                <form>
                    <p>Let's create your account</p>
                    <div class="lowin-group">
                        <label>Name</label>
                        <input type="text" name="name" autocomplete="name" class="lowin-input">
                    </div>
                    <div class="lowin-group">
                        <label>Email</label>
                        <input type="text" autocomplete="email" name="email" class="lowin-input">
                    </div>
                    <div class="lowin-group">
                        <label>Password</label>
                        <input type="password" name="password" autocomplete="current-password" class="lowin-input">
                    </div>
                    <button class="lowin-btn">
                        Sign Up
                    </button>

                    <div class="text-foot">
                        Already have an account? <a href="" class="login-link">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="lowin-footer">
        Thanks@itskodinger</a>
    </footer>
</div>

<script src="{{ URL::asset('/') }}js/jquery.min.js"></script>
<script src="{{ URL::asset('/') }}js/plug/auth.js"></script>



<script>
    $(document).ready(function(){

        $(".login-btn").click(function(){

            var email = $('.user_email').val()
            var pd = $('.user_pd').val()

            {{--$.post("{{ url('/api/aircup/adminlogin') }}",--}}
            {{--    {--}}
            {{--        email:email,--}}
            {{--        pd:pd--}}
            {{--    },--}}
            {{--    function(data,status){--}}
            {{--        if(data.status == 200){--}}
            {{--            window.location.href = data.url;--}}
            {{--        }else {--}}
            {{--            alert('账号输入错误')--}}
            {{--        }--}}
            {{--    }--}}
            {{--);--}}

            $.ajax({
                url:"{{ url('/api/aircup/adminlogin') }}",
                type:'POST',
                data: {
                    email:email,
                    pd:pd
                },
                success: function (data) {
                    if(data.status == 200){
                        window.location.href = data.url;
                    }else {
                        alert('账号输入错误')
                    }
                },
                error:function (data) {
                    alert(data)
                }
            })
        });



    });

</script>


<script>
    Auth.init({
        login_url: '#login',
        forgot_url: '#forgot'
    });
</script>

</body>
</html>
