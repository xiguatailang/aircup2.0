<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>造物记</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="full-screen" content="yes" />
    <meta name="x5-fullscreen" content="true" />
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/mobile_css.css" />
    <meta http-equiv="refresh" content="5;url={{ URL::asset('/') }}"/>
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

<body>
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
<div class="juzhong">
    <p class="f_60">恭喜您已预定成功</p>
    <p class="f_30" style="color: #666666">有进一步的信息我们会及时与您联系</p>
</div>
<footer style="position: fixed;bottom:0;">
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
</script>

</html>
