<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>About us</title>
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

@include('../common/web_navigation_en')


<div class="about_1 mar">
    <p class="story_1_1 f_60" style="padding-top:260px">Mission</p>
    <p class="f_30 m_t20">Provide users with convenient access to information they need.</p>
    <p class="story_1_1 f_60" style="padding-top:100px">Goal</p>
    <p class="f_30 m_t20">Replace all glasses with smart glasses.</p>
</div>
<div class="mar p_80">
    <p class="f_60">Values</p>
    <p class="f_30 m_t20">Everyone is the participant in, practitioner of, and protector of our values.</p>
</div>
<div class="about_2 mar ov">
    <div class="about_2_1 left">
        <span>Create values</span>
    </div>
    <div class="about_2_2 right">
        <span>Only satisfying user's core benefits can we create values.<br />Every change is at the service of solving user's problems.</span>
    </div>
</div>
<div class="about_2 mar ov">
    <div class="about_2_1 left">
        <span>Respect others</span>
    </div>
    <div class="about_2_2 right">
        <span>Respect equality. Treat others fairly and frankly. Form a unite and helpful team.</span>
    </div>
</div>
<div class="about_2 mar ov">
    <div class="about_2_1 left">
        <span>Fear no power and honour the truth</span>
    </div>
    <div class="about_2_2 right">
        <span>Persist for the right things. Never compromise out of fear for the powerful.</span>
    </div>
</div>
<div class="about_2 mar ov">
    <div class="about_2_1 left">
        <span>Keep focused and keep simple</span>
    </div>
    <div class="about_2_2 right">
        <span>Focusing on the essential can achieve better.<br />Simplicity is the best way of improving efficiency.</span>
    </div>
</div>
<div class="about_2 mar ov">
    <div class="about_2_1 left">
        <span>Encourage innovation and learning</span>
    </div>
    <div class="about_2_2 right">
        <span>Here, we encourage new ideas and sharing, and tolerate mistakes.<br />Learning is to cultivate our abilities to see the root of problems, and to find a better way of solving them.</span>
    </div>
</div>
<div class="about_2 mar ov" style="border-bottom: 1px solid #999999">
    <div class="about_2_1 left">
        <span>Honour our words</span>
    </div>
    <div class="about_2_2 right">
        <span>We don't make rash promises, but always honour our words.<br />Fulfilling our promises is the cornerstone of cooperation.</span>
    </div>
</div>
<div class="mar p_80">
    <p class="f_60">The meaning of Air Cup</p>
    <p class="f_30 m_t20" style="color: #666666">1.Everyone has cup and use it every day. We hope people can like our product and its company.<br /><br />2.To establish our place in the fast-changing industry, we should pursue innovation, avoid self-satisfaction, and maintain an open state like empty air.
    </p>
</div>
<div class="mar p_80">
    <p class="f_60">Company Address</p>
    <p class="f_30 m_t20" style="color: #666666">Floor 3, Tower A, Dinghao Building, Zhong Guan Cun, Haidian District, Beijing</p>
    <!-- <img src="img/about_1.png" alt="" class="about_img1 m_t40"> -->
    <div class="map m_t40 mar" id="map"></div>
</div>
<div class="w_720 p_80">
    <p class="f_48">Follow us</p>
    <img src="{{ URL::asset('/') }}image/web/about_2.png" alt="" class="about_img2 m_t40 mar">
</div>
<div class="w_720 p_80">
    <p class="f_48">Leave a comment</p>
    <p class="about_p1 mar m_t40">Email</p>
    <input type="text" class="about_inp1 mar" placeholder="Aircup@cup.link" onfocus="this.placeholder=''" onblur="this.placeholder='Aircup@cup.link'">
    <p class="about_p1 mar m_t20">Leave a comment</p>
    <textarea name="" id="" cols="" rows="" class="about_inp2 mar"></textarea>
    <button class="about_inp3 mar">Submit</button>
</div>

@include('/common/web_footer_en')


<div class="bg">
    <div class="bg_1">
        <img src="{{ URL::asset('/') }}image/web/x.png" alt="" class="close">
        <p class="f_36" style="padding-top:140px">Thanks for your message！</p>
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
        var point = new BMap.Point(116.321146, 39.989646);
        // 创建点坐标
        map.centerAndZoom(point, 17);
        var marker = new BMap.Marker(point); // 创建标注
        map.addOverlay(marker);
    } ,1000 * 0.5);






</script>

</html>
