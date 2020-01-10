<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>预定</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="full-screen" content="yes" />
    <meta name="x5-fullscreen" content="true" />
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/mobile_css.css" />
    <script src="{{ URL::asset('/') }}js/jquery.min.js"></script>

    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?e6e8e979116c873af381afaf9cb8daf1";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

</head>

<body style="background-color:#f7f7f7;">
<nav>
    <a href="{{ url('/about') }}">
        <img src="{{ URL::asset('/') }}image/mobile_nav_1.png" alt="" class="nav_1" />
    </a>
    <a href="{{ url('/') }}">
        <img src="{{ URL::asset('/') }}image/mobile_nav_2.png" alt="" class="nav_2" />
    </a>
    <a href="https://www.kickstarter.com/projects/aircup/light-video-a-pair-of-magic-ar-smart-glasses?ref=guanwang_cn" target="_blank">
        <img src="{{ URL::asset('/') }}image/mobile_nav_3.png" alt="" class="nav_3" />
    </a>
</nav>
<div class="buy_1 mar">
{{--    <p class="f_30 buy_2">产品预计10月发售，<br/>实际价格已发售通知为准。<br/>如要购买请填写表单，留下联系方式，<br/>我们会第一时间与您联系。<br/>首批购买者会有纪念礼物呦～</p>--}}
    <p class="f_30 buy_2">产品即将发售，<br/>预计售价约2500-3000元，<br/>实际价格已发售通知为准。<br/>首批产品限量发售，先定先得。<br/>如要购买请填写表单，留下联系方式，<br/>我们会第一时间与您联系。<br/>首批购买者会有纪念礼物呦～</p>
    <p class="f_60 buy_3">预订信息</p>
    <p style="text-align: center;font-size:0.18rem;color:#666666;position: relative;margin: -0.7rem 0 0.5rem 0">
            <span style="font-size: 0.5rem;margin-top: -14px;
            position: absolute;color: #d91e06;left: 2.9rem;">*</span>为必填项
    </p>
    <div class="buy_4 mar">
        <p class="buy_5">1、您的姓名？<span>*</span></p>
        <input type="text" class="buy_6" id="name">
        <p class="buy_5 m_t40">2、您的性别？<span>*</span>
            <input type="radio" name="sex" id="sex_man" checked="checked" value="男"
                   style="margin-left: 0.4rem;vertical-align:middle;margin-right:0.1rem ;"><label for="sex_man">男</label>
            <input type="radio" name="sex" id="sex_woman" value="女"
                   style="margin-left: 0.2rem;vertical-align:middle;margin-right:0.1rem ;"><label for="sex_woman">女</label>
        </p>
        <input type="text" class="buy_6" id="sex" readonly>
        <p class="buy_5 m_t40">3、您的邮箱？<span>*</span></p>
        <input type="text" class="buy_6" id="mail">
        <p class="buy_5 m_t40">4、您的年龄？<span>*</span></p>
        <input type="text" class="buy_6" id="age">
        <p class="buy_5 m_t40">5、您的微信号？</p>
        <input type="text" class="buy_6" id="wx">
        <p class="buy_5 m_t40">6、您的学校或单位？</p>
        <input type="text" class="buy_6" id="address">
        <p class="buy_5 m_t40">7、给我们的留言</p>
        <textarea name="" id="" cols="" rows="" class="about_inp2 mar" style="border-bottom: #666666 1px solid;width:100%;font-size:0.26rem;"></textarea>
        <button class="about_inp3 mar">发&nbsp;送</button>
        <p class="buy_7">我们会妥善保管您信息</p>
    </div>
</div>


<div class="h_50"></div>
<footer>
    <div class="footer_1">
        <a href="{{ url('/') }}" class="footer_1_a">造物记</a>
        <a href="{{ url('/about') }}" class="footer_1_a">关于我们</a>
        <a href="https://www.kickstarter.com/projects/aircup/light-video-a-pair-of-magic-ar-smart-glasses?ref=guanwang_cn" target="_blank" class="footer_1_a footer_1_a1">预定购买</a>
    </div>
    <div class="footer_2">
        <a href="" class="footer_2_1">隐私政策</a>
        <a href="" class="footer_2_1">服务条款</a>
        <span class="footer_2_1">©2019 京ICP备19040913号</span>
    </div>
</footer>
</body>
<script type="text/javascript">
    (function (doc, win) {
        var docEl = doc.documentElement,
            resizeEvt =
                "orientationchange" in window ? "orientationchange" : "resize",
            recalc = function () {
                var clientWidth = docEl.clientWidth;
                if (!clientWidth) return;
                if (clientWidth >= 720) {
                    docEl.style.fontSize = "100px";
                } else {
                    docEl.style.fontSize = 100 * (clientWidth / 720) + "px";
                }
            };
        if (!doc.addEventListener) return;
        win.addEventListener(resizeEvt, recalc, false);
        doc.addEventListener("DOMContentLoaded", recalc, false);
    })(document, window);
    //发送留言
    $(".about_inp3").click(function () {
        var name = $("#name").val();
        var sex;
        var item = $(":radio:checked");
        var len = item.length;
        if (len > 0) {
            sex = $(":radio:checked").val()
        }
        var mail = $("#mail").val();
        var age = $("#age").val();
        var wx = $("#wx").val();
        var address = $("#address").val();
        var message = $(".about_inp2").val();
        if(name==""){
            alert("请填写您的名字")
            return
        }else if(sex==""){
            alert("请填写您的性别")
            return
        }else if(mail==""){
            alert("请填写您的邮箱")
            return
        }else if(age==""){
            alert("请填写您的年龄")
            return
        }
        $.ajax({
            url:"{{ url('/api/aircup/makeorder') }}",
            type:'POST',
            data:{
                name:name,
                sex:sex,
                email:mail,
                age:age,
                wx_id:wx,
                address:address,
                feedback:message
            },
            success:function(data){
                if(data.status==200) {
                    window.location.href = "{{ url('/buysuccess') }}";
                }else {
                    alert(data.msg)
                }
            }
        })
    })
</script>

</html>
