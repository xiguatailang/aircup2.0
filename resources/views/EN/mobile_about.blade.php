<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>About us</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="full-screen" content="yes" />
    <meta name="x5-fullscreen" content="true" />
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/mobile_css.css" />
    <script src="{{ URL::asset('/') }}js/jquery.min.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=0k9zbblGVozmyAZyKia0jF7o2LxhLCR5">
    </script>

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

@include('../common/mobile_navigation_en')

<div class="about_1 mar">
    <p class="story_1_1 f_60" style="padding-top:4rem">Mission</p>
    <p class="f_30 m_t20">Provide users with convenient access to information they need.</p>
    <p class="story_1_1 f_60" style="padding-top:1rem">Goal</p>
    <p class="f_30 m_t20">Replace all glasses with smart glasses.</p>
</div>
<div class="w_720 p_80">
    <p class="f_60">Values</p>
    <p class="f_30 m_t20">Everyone is the participant in, practitioner of, and protector of our values.</p>
</div>
<div class="about_2 mar">
    <p class="about_2_1">Create values</p>
    <p class="f_30 m_t20">Only satisfying user's core benefits can we create values.<br />Every change is at the service of solving user's problems.</p>
</div>
<div class="about_2 mar">
    <p class="about_2_1">Respect others</p>
    <p class="f_30 m_t20">Respect equality. Treat others fairly and frankly. Form a unite and helpful team.</p>
</div>
<div class="about_2 mar">
    <p class="about_2_1">Fear no power and honour the truth</p>
    <p class="f_30 m_t20">Persist for the right things. Never compromise out of fear for the powerful.</p>
</div>
<div class="about_2 mar">
    <p class="about_2_1">Keep focused and keep simple</p>
    <p class="f_30 m_t20">Focusing on the essential can achieve better.<br />Simplicity is the best way of improving efficiency.</p>
</div>
<div class="about_2 mar">
    <p class="about_2_1">Encourage innovation and learning</p>
    <p class="f_30 m_t20">Here, we encourage new ideas and sharing, and tolerate mistakes.<br />Learning is to cultivate our abilities to see the root of problems, and to find a better way of solving them.</p>
</div>
<div class="about_2 mar" style="border-bottom: 1px solid #999999">
    <p class="about_2_1">Honour our words</p>
    <p class="f_30 m_t20">We don't make rash promises, but always honour our words.<br />Fulfilling our promises is the cornerstone of cooperation.</p>
</div>
<div class="w_720 p_80">
    <p class="f_48">The meaning of Air Cup</p>
    <p class="f_30 m_t20">1.Everyone has cup and use it every day. We hope people can like our product and its company.<br /><br />2.To establish our place in the fast-changing industry, we should pursue innovation, avoid self-satisfaction, and maintain an open state like empty air.
    </p>
</div>
<div class="w_720 p_80">
    <p class="f_48">Company Address</p>
    <p class="f_30 m_t20">Room 901, Building A, Dongsheng Plaza, No. 8 Zhongguancun, Haidian District, Beijing</p>
    <!-- <img src="{{ URL::asset('/') }}image/mobile_about_1.png" alt="" class="about_img1 m_t40"> -->
    <div class="map m_t40 mar" id="map"></div>
</div>
<div class="w_720 p_80">
    <p class="f_48">Follow us </p>
    <img src="{{ URL::asset('/') }}image/mobile_about_2.png" alt="" class="about_img2 m_t40">
</div>
<div class="w_720 p_80">
    <p class="f_48">Leave a comment</p>
    <p class="about_p1 mar m_t40">Email</p>
    <input type="text" class="about_inp1 mar" placeholder="Aircup@cup.link" onfocus="this.placeholder=''" onblur="this.placeholder='Aircup@cup.link'">
    <p class="about_p1 mar m_t20">Leave a comment</p>
    <textarea name="" id="" cols="" rows="" class="about_inp2 mar"></textarea>
    <button class="about_inp3">Submit</button>
</div>


@include('/common/mobile_footer_en')

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
        var mail = $(".about_inp1").val();
        var message = $(".about_inp2").val();
        if (mail == "") {
            alert("请填写您的邮箱")
            return
        } else if (message == "") {
            alert("请填写您的留言")
            return
        }
        $.ajax({
            url:"{{ url('/api/aircup/makefeedBack') }}",
            type:'POST',
            data: {
                email: mail,
                content: message
            },
            success: function (data) {
                if(data.status==200) {
                    window.location.href = "{{ url('/feedback') }}";
                }else {
                    alert(data.msg)
                }
            }
        })
    })
    setTimeout(function () {
        //地图
        var map = new BMap.Map("map");
        // 创建地图实例
        var point = new BMap.Point(116.340121,39.999639);
        // 创建点坐标
        map.centerAndZoom(point, 17);
        var marker = new BMap.Marker(point); // 创建标注
        map.addOverlay(marker);
    } ,1000 * 0.5);
</script>

</html>
