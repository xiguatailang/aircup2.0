<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>造物记</title>
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/web_css.css" />
    <script src="{{ URL::asset('/') }}js/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('/') }}image/web/logo_h.png"/>

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
<div class="index_1 mar">

    @include('/common/web_navigation_cn')

    <div class="w_1200">
        <p class="f_72" style="padding-top:350px">一个新时代,即将开启</p>
        <p class="f_30 p_t40">能放进上衣口袋的智能眼镜来了</p>
{{--        <a href="https://www.kickstarter.com/projects/aircup/light-video-a-pair-of-magic-ar-smart-glasses?ref=guanwang_cn" target="_blank" class="index_a1 mar">预定购买</a>--}}
        <p class="f_70 c_f" style="padding-top:690px;">很多人问我，你为什么做智能眼镜<br />“参与创造未来，让生命更有意义”</p>
        <p class="f_70 c_f" style="padding-top:560px;">然而，我却在质疑声中出发，<br />直到今天也从未停止</p>
        <p class="f_36 c_f" style="padding-top:100px;">
            你不会算法，没有供应链资源，你凭什么<br /><br />这种项目都是MIT、斯坦福的人才能做<br /><br />我是科大少年班毕业，又在研究所工作，我都不敢做<br /><br />你不知道做硬件有多难
        </p>
        <p class="f_70 c_f" style="padding-top:660px;">走自己的路，勇敢的追求梦想</p>
        <p class="f_36 c_f" style="padding-top:100px;">希望可以激励,更多像我一样的平凡人<br />勇敢的挑战自我，追求梦想</p>
    </div>
</div>
<div class="index_2 ov w_1200">
    <div class="index_3 left">
        <p class="index_2_p1">2017年,独自上路</p>
        <p class="index_2_p2">那些质疑我的人是以他们有限的经验，<br />预判我的结局<br />而我的坚持源自，享受创造的过程<br />并每天乐在其中</p>
        <a href="{{ url('/story2017') }}" class="index_2_p3 mar">了解更多故事</a>
    </div>
    <div class="index_4 right">
        <p class="index_2_p1">2018年,探索中前行</p>
        <p class="index_2_p2">永远相信未来会更美好<br />即使未来不理想<br />我们也不应放弃努力</p>
        <a href="{{ url('/story2018') }}" class="index_2_p3 mar">了解更多故事</a>
    </div>
</div>
<div class="index_5 mar index_2">
    <p class="index_2_p1" style="padding-top:80px;">2019年</p>
    <p class="index_2_p2">做出一台重80g，可放进上衣口袋的智能眼镜</p>
</div>

@include('/common/web_footer_cn')

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
</script>

</html>
