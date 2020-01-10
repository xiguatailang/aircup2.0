<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>关于我们</title>
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

@include('/common/mobile_navigation_cn')


<div class="about_1 mar">
    <p class="story_1_1 f_60" style="padding-top:4rem">使命</p>
    <p class="f_30 m_t20">让用户轻松、如影随形的获取信息</p>
    <p class="story_1_1 f_60" style="padding-top:1rem">愿景</p>
    <p class="f_30 m_t20">将所有眼镜都换成智能眼镜</p>
</div>
<div class="w_720 p_80">
    <p class="f_60">价值观</p>
    <p class="f_30 m_t20">人人都是团队价值观的参与者、<br />践行者和捍卫者</p>
</div>
<div class="about_2 mar">
    <p class="about_2_1">创造价值</p>
    <p class="f_30 m_t20">满足用户的核心利益，才有价值；<br />每项改动，都是帮助用户解决问题服务</p>
</div>
<div class="about_2 mar">
    <p class="about_2_1">尊重他人</p>
    <p class="f_30 m_t20">尊重平等，公平待人，坦诚相待，<br />团结互助</p>
</div>
<div class="about_2 mar">
    <p class="about_2_1">不惧权利,敬畏真理</p>
    <p class="f_30 m_t20">为对的事情而坚持，不因畏惧权力<br />而妥协</p>
</div>
<div class="about_2 mar">
    <p class="about_2_1">保持专注,保持简洁</p>
    <p class="f_30 m_t20">专注本质，才能做到更好；<br />简洁的提高效率的最佳途径；</p>
</div>
<div class="about_2 mar">
    <p class="about_2_1">鼓励创新,鼓励学习</p>
    <p class="f_30 m_t20">在这里，新想法，快速试错，分享，<br />都将被鼓励；<br />学习是为了增长看问题本质的能力，<br />是为了找更优的方法</p>
</div>
<div class="about_2 mar" style="border-bottom: 1px solid #999999">
    <p class="about_2_1">言出必行</p>
    <p class="f_30 m_t20">诺不轻许，言出必行；<br />注重承诺才是合作的基石</p>
</div>
<div class="w_720 p_80">
    <p class="f_48">空杯的含义</p>
    <p class="f_30 m_t20">1、杯子人人拥有，每天使用；希望产品能够<br />人人喜欢，时刻陪伴。<br /><br />2、不断创新，永不满足，保持空的状态,<br />才能在快速发展的行业中立足。
    </p>
</div>
<div class="w_720 p_80">
    <p class="f_48">公司地址</p>
    <p class="f_30 m_t20">北京市海淀区中关村8号东升大厦A座901</p>
    <!-- <img src="{{ URL::asset('/') }}image/mobile_about_1.png" alt="" class="about_img1 m_t40"> -->
    <div class="map m_t40 mar" id="map"></div>
</div>
<div class="w_720 p_80">
    <p class="f_48">关注我们</p>
    <img src="{{ URL::asset('/') }}image/mobile_about_2.png" alt="" class="about_img2 m_t40">
</div>
<div class="w_720 p_80">
    <p class="f_48">给我们留言</p>
    <p class="about_p1 mar m_t40">邮箱</p>
    <input type="text" class="about_inp1 mar" placeholder="Aircup@cup.link" onfocus="this.placeholder=''" onblur="this.placeholder='Aircup@cup.link'">
    <p class="about_p1 mar m_t20">给我们留言</p>
    <textarea name="" id="" cols="" rows="" class="about_inp2 mar"></textarea>
    <button class="about_inp3">发&nbsp;送</button>
</div>


@include('/common/mobile_footer_cn')

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
