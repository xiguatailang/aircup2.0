<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>The Creation</title>
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

<body>

@include('../common/mobile_navigation_en')

<div class="index_1">
    <p class="index_1_1">A new era is coming soon.</p>
    <p class="index_1_2">Smart glasses that can be put into your pockets are here.</p>
    <a href="https://www.kickstarter.com/projects/aircup/light-video-a-pair-of-magic-ar-smart-glasses?ref=guanwang_cn" target="_blank" class="index_1_3 mar">Pre-order</a>
    <p class="index_1_4">Many people ask me why I choose smart glasses.<br/>“To create the future, and to give life more meaning”</p>
    <p class="index_1_4 index_1_5">I started with voices of doubts that have not yet stopped</p>
    <p class="index_1_6">You don’t know algorithms. You have no supply chains. How dare you?<br/><br/>Such project is for MTI or Stanford geniuses.<br/><br/> I graduated from Special Class for the Gifted Young,and now work in a research institute, but I dare not do it.<br/><br/>You know nothing about the difficulties in developing hardware.</p>
    <p class="index_1_4">Go your own way, <br/>and find the courage to pursue your dreams</p>
    <p class="index_1_6">I hope to encourage more ordinary people like me to challenge ourselves, and pursue dreams.</p>
</div>
<div class="index_2 index_2_1 mar">
    <p class="index_2_p1">In 2017, I began the journey alone.</p>
    <p class="index_2_p2">Those who doubt me predict my end with their limited experience.<br/>But my persistence comes from the enjoyment of creation.<br/>I enjoy it every day.</p>
    <a href="{{ url('/story2017') }}" class="index_2_p3 mar">To know more stories</a>
</div>
<div class="index_2 index_2_2 mar">
    <p class="index_2_p1">In 2018, I march forward in exploration.</p>
    <p class="index_2_p2">I always believe the future is better.<br/>Even though it is no ideal,<br/>we should still keep trying.</p>
    <a href="{{ url('/story2018') }}" class="index_2_p3 mar">To know more stories</a>
</div>
<div class="index_2 index_2_3 mar">
    <p class="index_2_p1 index_2_p4">In 2019,</p>
    <p class="index_2_p2">Make a pair of 80-gram smart glasses that can be put into your pockets.</p>
</div>
<div class="h_50"></div>

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
</script>

</html>
