<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>关于我们</title>
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/web_css.css" />
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('/') }}image/web/logo_h.png"/>
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

<body>

@include('/common/web_navigation_cn')

<div class="about_1 mar">
    <p class="story_1_1 f_60" style="padding-top:260px">使命</p>
    <p class="f_30 m_t20">让用户轻松、如影随形的获取信息</p>
    <p class="story_1_1 f_60" style="padding-top:100px">愿景</p>
    <p class="f_30 m_t20">将所有眼镜都换成智能眼镜</p>
</div>
<div class="mar p_80">
    <p class="f_60">价值观</p>
    <p class="f_30 m_t20">人人都是团队价值观的参与者、践行者和捍卫者</p>
</div>
<div class="about_2 mar ov">
    <div class="about_2_1 left">
        <span>创造价值</span>
    </div>
    <div class="about_2_2 right">
        <span>满足用户的核心利益，才有价值；<br />每项改动，都是帮助用户解决问题服务</span>
    </div>
</div>
<div class="about_2 mar ov">
    <div class="about_2_1 left">
        <span>尊重他人</span>
    </div>
    <div class="about_2_2 right">
        <span>尊重平等，公平待人，坦诚相待，团结互助</span>
    </div>
</div>
<div class="about_2 mar ov">
    <div class="about_2_1 left">
        <span>不惧权利,<br />敬畏真理</span>
    </div>
    <div class="about_2_2 right">
        <span>为对的事情而坚持，不因畏惧权力而妥协</span>
    </div>
</div>
<div class="about_2 mar ov">
    <div class="about_2_1 left">
        <span>保持专注,<br />保持简洁</span>
    </div>
    <div class="about_2_2 right">
        <span>专注本质，才能做到更好；<br />简洁的提高效率的最佳途径； </span>
    </div>
</div>
<div class="about_2 mar ov">
    <div class="about_2_1 left">
        <span>鼓励创新,<br />鼓励学习</span>
    </div>
    <div class="about_2_2 right">
        <span>在这里，新想法，快速试错，分享，<br />都将被鼓励；<br />学习是为了增长看问题本质的能力，<br />是为了找更优的方法</span>
    </div>
</div>
<div class="about_2 mar ov" style="border-bottom: 1px solid #999999">
    <div class="about_2_1 left">
        <span>言出必行</span>
    </div>
    <div class="about_2_2 right">
        <span>诺不轻许，言出必行；<br />注重承诺才是合作的基石</span>
    </div>
</div>
<div class="mar p_80">
    <p class="f_60">空杯的含义</p>
    <p class="f_30 m_t20" style="color: #666666">1、杯子人人拥有，每天使用；希望产品能够人人喜欢，时刻陪伴。<br /><br />2、不断创新，永不满足，保持空的状态,<br />才能在快速发展的行业中立足。
    </p>
</div>
<div class="mar p_80">
    <p class="f_60">公司地址</p>
    <p class="f_30 m_t20" style="color: #666666">北京市海淀区中关村8号东升大厦A座901</p>
    <!-- <img src="img/about_1.png" alt="" class="about_img1 m_t40"> -->
    <div class="map m_t40 mar" id="map"></div>
</div>
<div class="w_720 p_80">
    <p class="f_48">关注我们</p>
    <img src="{{ URL::asset('/') }}image/web/about_2.png" alt="" class="about_img2 m_t40 mar">
</div>
<div class="w_720 p_80">
    <p class="f_48">给我们留言</p>
    <p class="about_p1 mar m_t40">邮箱</p>
    <input type="text" class="about_inp1 mar" placeholder="Aircup@cup.link" onfocus="this.placeholder=''" onblur="this.placeholder='Aircup@cup.link'">
    <p class="about_p1 mar m_t20">给我们留言</p>
    <textarea name="" id="" cols="" rows="" class="about_inp2 mar"></textarea>
    <button class="about_inp3 mar">发&nbsp;送</button>
</div>

@include('/common/web_footer_cn')


<div class="bg">
    <div class="bg_1">
        <img src="{{ URL::asset('/') }}image/web/x.png" alt="" class="close">
        <p class="f_36" style="padding-top:140px">感谢您的留言！</p>
    </div>
</div>

</body>
<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            var topp = $(document).scrollTop();
            if (topp > 10) {
                $("nav").css({
                    "background": "#3c3d3d"
                });
                $(".nav_a").css({
                    "color": "#fff"
                });
                $(".nav_logo").attr("src", "{{ URL::asset('/') }}image/web/logo_b.png");
            } else if (topp < 10) {
                $("nav").css({
                    "background": "rgba(0,0,0,0)"
                });
                $(".nav_a").css({
                    "color": "#333"
                });
                $(".nav_logo").attr("src", "{{ URL::asset('/') }}image/web/logo_h.png");
            }
        })
    })
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
                    bg()
                }else {
                    alert(data.msg)
                }
            }
        })
    })

    function bg(){
        $(".bg").show();
        $(".close").click(function(){
            $(".bg").hide();
            $("input").val("");
            $("textarea").val("");
        })
    }
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
