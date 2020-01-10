<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>首页</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="full-screen" content="yes" />
    <meta name="x5-fullscreen" content="true" />
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/mobile_detail2.0.css" />
    <script src="{{ URL::asset('/') }}js/jquery.min.js"></script>

</head>

<body>

@include('/common/mobile_navigation_cn')

<!-- 上面头部代码直接复制替换原来的html -->
<p class="index_p1" style="padding-top: 1.4rem;">轻影<sup style="font-size: 0.15rem;color: #666666;">TM</sup> <br />最好的手机游戏伴侣</p>
{{--<p class="index_p1"><img src="{{ URL::asset('/') }}image/web/titile_tm.jpeg" alt=""></p>--}}
{{--<p class="index_p2">最好的手机游戏伴侣</p>--}}
<span class="video_play" style="margin: 0.6rem auto 0 2.7rem;" onclick="play(1)">观看影片</span>
<a href="https://www.kickstarter.com/projects/aircup/light-video-a-pair-of-magic-ar-smart-glasses?ref=guanwang_cn" target="_blank" class="pre_a">预订购买</a>
<img src="{{ URL::asset('/') }}image/mobile2.0/index_1.png" alt="" class="index_img">
<p class="index_p1">移动的高清电视</p>
<p class="index_p2">轻影是高清显示（分辨率是1920*1080），再配上80英寸的大屏幕，这就是你私人的移动高清影院。可以一边喝咖啡，吃东西，摊在沙发里，享受这种随时随地的快乐。</p>
<img src="{{ URL::asset('/') }}image/mobile2.0/index_2.png" alt="" class="index_img">
<p class="index_p1">轻薄时尚</p>
<p class="index_p2">轻影的重量控制到了极限的62g左右，一枚鸡蛋的重量，无论是外出旅行还是居家生活，都会给你的生活带来乐趣。</p>
<img src="{{ URL::asset('/') }}image/mobile2.0/index_3.png" alt="" class="index_img">
<p class="index_p1">与朋友一起多人游戏</p>
<p class="index_p2">轻影可以很好的支持你手机里的所有游戏，而且轻影可以持续续航7个小时，你可以和朋友毫无顾虑的欢乐一整天。 </p>
<img src="{{ URL::asset('/') }}image/mobile2.0/index_4.png" alt="" class="index_img">
<p class="index_p1">轻影专注于: <br />显示、声音、佩戴舒适</p>
<p class="index_p2">我们耗费了3年时间设计和完善轻影，主要目标是创造一个令人难以置信的观影体验。我们一直认为轻影背后的技术应该突出观影体验，我们设计它就是为了这个目的。聚焦三个重点来设计这款产品：显示、声音、舒适性。我们要求显示效果非常清晰；声音悦耳，可以让使用者听出高音与低音的区别；最重要的是带着舒服，即使你一整天都带着它，也不会感到不适。</p>
<img src="{{ URL::asset('/') }}image/mobile2.0/index_5_cn_bop.jpeg" alt="" class="index_img" style="margin-left: auto;margin-right: auto;">
<div class="h_50"></div>
<p class="index_p1">技术特点</p>
<div class="index_div1">
    <span class="index_span1" onclick="swicth(1,this)">显示</span>
    <span onclick="swicth(2,this)">声音</span>
    <span onclick="swicth(3,this)">舒适</span>
    <span onclick="swicth(5,this)">重量</span>
    <span onclick="swicth(4,this)">充电</span>
</div>
<div class="index_div2">
    <div class="index_div2_1" id="div1">
        <p class="index_p2 p_t30">仅有小拇指大小的显示屏，却拥有5648的像素密度，堪称超级视网膜屏。这项技术在全球范围内也属领先技术。我们与美国Apple公司的屏幕供应商合作，确保屏幕的质量。</p>
        <img src="{{ URL::asset('/') }}image/mobile2.0/index_6_1.png" alt="" class="index_img1">
        <table class="index_table">
            <tr class="index_tr1">
                <td>75%</td>
                <td>5648</td>
                <td>1000:1</td>
            </tr>
            <tr class="index_tr2">
                <td>NTSC</td>
                <td>PPI</td>
                <td>强对比度</td>
            </tr>
        </table>
        <table class="index_table m_t20">
            <tr class="index_tr1">
                <td>0.39inch</td>
                <td>1920 x 1080 </td>
                <td>800cd/m2</td>
            </tr>
            <tr class="index_tr2">
                <td>屏幕尺寸</td>
                <td>分辨率</td>
                <td>峰值亮度</td>
            </tr>
        </table>
    </div>
    <div class="index_div2_1" style="display: none;height: 6rem;" id="div2">
        <p class="index_p2 p_t30">在声音方面，近耳式立体环绕音效，音质清晰且不打扰他人。镜腿两侧分别有一个扬声器，左右分离，立体声道。</p>
        <img src="{{ URL::asset('/') }}image/mobile2.0/index_6_2.jpeg" alt="" class="index_img2">
    </div>
    <div class="index_div2_1" style="display: none;height: 5.5rem;" id="div3">
        <p class="index_p2 p_t40">轻影的尺寸做了男女通用的兼容设计，满足全球95%的头部尺寸。鼻托杆可以用手调整弯曲度，以适应鼻梁的不同。鼻托可以更换，根据每个人的不同，自由选择。</p>
        <img src="{{ URL::asset('/') }}image/mobile2.0/index_6_3.jpeg" alt="" class="index_img2">
        <span class="video_play" style="position: absolute;bottom: 0.1rem;left: 2.7rem;" onclick="play(2)">观看影片</span>
    </div>
    <div class="index_div2_1" style="display: none;height: 5rem;" id="div5">
        <p class="index_p2 p_t30">人们看视频和玩手游的时间通常都很久，因此我们需要一款轻盈的眼镜。轻影努力的降低重量，目前整机重量62.7g，仅相当3幅处方眼镜。</p>
        <img src="{{ URL::asset('/') }}image/mobile2.0/index_6_5.jpeg" alt="" class="index_img2">
    </div>
    <div class="index_div2_1" style="display: none;height: 6rem;" id="div4">
        <p class="index_p2 p_t40">7000mAh(typ)/h的高续航电池，酣畅观影7小时，打游戏4个小时，USB Type-C双面充电接口，支持在夜间盲插。主机支持PD快充协议，1-2小时即可充满电。</p>
        <img src="{{ URL::asset('/') }}image/mobile2.0/index_6_4.png" alt="" class="index_img2">
        <span class="video_play" style="position: absolute;bottom: 0.2rem;left: 2.6rem;" onclick="play(3)">观看影片</span>
    </div>
</div>
<div class="bg_f7">
    <p class="index_p1">设备兼容性</p>
    <p class="index_p2">无论你现在使用什么设备（手机、平板、电脑）都可以连接。无需为此，再去换一部新手机或单独购买。我们的系统兼容：Android/iOS/MacOS，您可以用不同设备进行连接，在眼镜中观看。未来兼容Windows。</p>
    <div style="padding-bottom: 0.4rem;position: relative;">
        <img src="{{ URL::asset('/') }}image/mobile2.0/index_7.png" alt="" class="index_img" style="margin-top:-0.3rem;">
        <span class="video_play" style="position: absolute;bottom: 1.6rem;left: 3.6rem;" onclick="play(4)">观看影片</span>
    </div>
</div>


<!-- 新加 -->
<p class="index_p1">媒体报道</p>
<div class="icon" style="margin-top: 0.2rem;">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_1.png" alt="" style="width: 1.69rem;">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_2.png" alt="" style="width: 1.65rem;">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_3.png" alt="" style="width: 2.13rem;">
</div>
<div class="icon" style="align-items:center">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_4.png" alt="" style="width: 1.8rem;">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_5.png" alt="" style="width: 1.54rem;">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_6.png" alt="" style="width: 1.96rem;">
</div>
<div class="icon" style="align-items:center">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_7.png" alt="" style="width: 2.68rem;">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_8.png" alt="" style="width: 1.95rem;">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_9.png" alt="" style="width: 1.54rem;">
</div>
<div class="icon" style="align-items:center">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_10.png" alt="" style="width: 2.53rem;">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_11.png" alt="" style="width: 2.82rem;">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_12.png" alt="" style="width: 1.13rem;">
</div>
<div class="icon" style="align-items:center;margin-top: 0.3rem;">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_13.png" alt="" style="width: 2.57rem;">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_14.png" alt="" style="width: 2.22rem;">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_15.png" alt="" style="width: 1.33rem;">
</div>
<div class="icon">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_16.png" alt="" style="width: 2.99rem;">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_17.png" alt="" style="width: 0.95rem;">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_18.png" alt="" style="width: 2.24rem;">
</div>
<div class="icon">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_19.png" alt="" style="width: 2.88rem;">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_20.png" alt="" style="width: 2.26rem;">
    <img src="{{ URL::asset('/') }}image/mobile2.0/new_21.png" alt="" style="width: 0.89rem;">
</div>
<div class="h_50"></div>
<p class="index_p1">用户评价</p>
<p class="index_p2">在设计轻影之初，我们曾与128人面对面的交谈，交换想法，验证这个产品能否解决用户问题。这种交流，累计时长达到106个小时。 当我们完成了样机之后，向数十位用户展示轻影。他们的反应非常积极，这是一个肯定的信号，表明我们正在做一些特别的事情。</p>
<div class="talk ov">
    <div class="photo">
        <img src="{{ URL::asset('/') }}image/mobile2.0/talk_1.png" alt="">
        <span>王先生</span>
    </div>
    <p style="margin-left: 0.2rem;">这种策略和技术是AR未来的正确发展方向。增强现实技术确保我可以同时体验虚拟现实和真实世界。作为一个技术爱好者，我很兴奋，终于有一款可以经常使用的眼镜了。 </p>
</div>
<div class="talk ov">
    <p>比起那些华而不实的科技产品，轻影务实了很多，去掉了很多我们用不上的功能，因此价格也更便宜，物超所值。</p>
    <div class="photo" style="margin-left: 0.3rem;">
        <img src="{{ URL::asset('/') }}image/mobile2.0/talk_2.png" alt="">
        <span>许先生</span>
    </div>
</div>
<div class="talk ov">
    <div class="photo">
        <img src="{{ URL::asset('/') }}image/mobile2.0/talk_3.png" alt="">
        <span>Summer</span>
    </div>
    <p style="margin-left: 0.2rem;">无论是在家里还是在旅途中，轻影都给了我很棒的体验，真是棒极了。而且，外观设计上比同类产品更加出色。</p>
</div>
<div class="talk ov">
    <p>看视频是我每天必做的娱乐，每天约有1-3小时。在节假日期间，会看的更久。当他们向我展示轻影的时候，我被它的魔法惊呆了。天啊！有了轻影，看视频再也不会感到手累了。</p>
    <div class="photo" style="margin-left: 0.3rem;">
        <img src="{{ URL::asset('/') }}image/mobile2.0/talk_4.png" alt="">
        <span>马小姐</span>
    </div>
</div>
<div class="h_50"></div>
<i class="line"></i>
<!-- 新加 -->

<p class="index_p1">技术参数</p>
<p class="index_p3 m_t40">屏幕</p>
<p class="index_p2 m_t10">0.39英寸(对角线)<br />
    Micro AMOLED Screen<br />
    分辨率：1920X1080 FHD | PPI:5648<br />
    屏幕亮度：800nit (HBM)<br />
    高对比度：10000:1<br />
    NTSC：75% (Typ)<br />
</p>
<i class="line"></i>
<p class="index_p3 m_t40">电池</p>
<p class="index_p2 m_t10">7000mAh (typ)<br />
    内置4.35V高压锂离子聚合物电池</p>
<i class="line"></i>
<p class="index_p3 m_t40">USB Type-C 充放电接口</p>
<p class="index_p2 m_t10">方向与主从自动识别<br />
    支持 USB Type-C 标准接口<br />
    支持 SRC 协议仲裁</p>
<i class="line"></i>
<p class="index_p3 m_t40">支持的PD快充协议</p>
<p class="index_p2 m_t10">对外充电:<br />
    Support BC1.2 DCP (5V/500mA)<br /><br />
    对内输入快充:<br />
    Support PD3.0/PD2.0</p>
<i class="line"></i>
<p class="index_p3 m_t40">安全保护</p>
<p class="index_p2 m_t10">
    充放电部分的安全防护<br />
    输入过压保护<br />
    输出过流保护<br />
    输出短接保护<br />
    充电超时保护<br />
    充电过压保护<br />
    超温保护
</p>
<i class="line"></i>
<p class="index_p3 m_t40">网络</p>
<p class="index_p2 m_t10">
    WLAN 协议：IEEE 802.11b/g/n/ac <br />
    WLAN 频率：2.412GHz ~ 2.485GHz <br />
    5.125GHz ~ 5.845GHz (5.0 GHz ISM Band) Light video
</p>
<i class="line"></i>
<p class="index_p3 m_t40">眼镜</p>
<p class="index_p2 m_t10">
    长度: 157mm<br />
    宽度: 74.64mm<br />
    高度: 40.94mm<br />
    重量: 63g
</p>
<img src="{{ URL::asset('/') }}image/mobile2.0/index_8_cn.jpeg" alt="" style="width: 70%;display: block;margin-left: 1.6rem;">
<p class="index_p3 m_t40">主机</p>
<p class="index_p2 m_t10">
    长度: 141mm<br />
    宽度: 55mm<br />
    高度: 14.48 mm<br />
    重量: 150g
</p>
<img src="{{ URL::asset('/') }}image/mobile2.0/index_9_cn.jpeg" alt="" style="width: 65%;display: block;margin: 0.3rem auto 0 1.5rem;">
<p class="index_p3 m_t40">数据线</p>
<p class="index_p2 m_t10">
    长度: 100cm<br />
    接口类型: usb-c / usb-a<br />
    材质: TPE<br />
    重量: 28g
</p>
<img src="{{ URL::asset('/') }}image/mobile2.0/index_10.png" alt="" style="width: 40%;display: block;margin: 0.2rem auto 0 auto;">
<i class="line"></i>
<p class="index_p3 m_t40">扬声器</p>
<p class="index_p2 m_t10">
    两枚1506扬声器
</p>
<i class="line"></i>
<p class="index_p3 m_t40">音频格式</p>
<p class="index_p2 m_t10">
    MP1/MP2/MP3、WMA、OGG， ADPCM-WAV,<br />
    PCM-WAV、AAC
</p>
<i class="line"></i>
<p class="index_p3 m_t40">视频格式</p>
<p class="index_p2 m_t10">
    avi、divx、mkv、ts、dat、vob、mpg、mpeg、mov、mp4、<br />
    rm、rmvb、wmv
</p>
<i class="line"></i>
<p class="index_p3 m_t40">传感器</p>
<p class="index_p2 m_t10">
    红外距离传感器
</p>
<i class="line"></i>
<p class="index_p3 m_t40">包装清单</p>
<p class="index_p2 m_t10">
    智能眼镜、主机、USB 3.0 数据线、说明书、眼镜布、精美包装盒
</p>
<p class="index_p3 m_t40"></p>
<div class="bg_f7">
    <p class="index_p1">团队</p>
    <p class="index_p2">
        Aircup公司团队成员分别在德国和中国。中国团队负责产品研发，采购、组织生产，市场运营等工作，德国团队提供技术支持。
    </p>
    <p class="index_p3 m_t40">中国团队</p>
    <div class="index_div3 m_t20">
        <img src="{{ URL::asset('/') }}image/mobile2.0/tx_1.png" alt="" class="tx">
        <div style="float: left;margin-left: 0.3rem;margin-top: 0.3rem;">
            <p class="index_p2" style="color: #333;">郑乃铭<br />CEO&创始人</p>
            <p class="index_p2">人民大学EMBA<br />多年智能眼镜创业经验</p>
        </div>
    </div>
    <div class="index_div3">
        <img src="{{ URL::asset('/') }}image/mobile2.0/tx_2.png" alt="" class="tx">
        <div style="float: left;margin-left: 0.3rem;margin-top: 0.2rem;">
            <p class="index_p2" style="color: #333;">郭军峰<br />工程师</p>
            <p class="index_p2">资深软件工程师<br />机器人编程大赛二等奖<br /></p>
        </div>
    </div>
    <div class="index_div3">
        <img src="{{ URL::asset('/') }}image/mobile2.0/tx_3.png" alt="" class="tx">
        <div style="float: left;margin-left: 0.3rem;margin-top: 0.42rem;">
            <p class="index_p2" style="color: #333;">关海京<br />工程师</p>
            <p class="index_p2">资深电子工程师</p>
        </div>
    </div>
    <p class="index_p3 m_t40">德国团队</p>
    <div class="index_div3 m_t20">
        <img src="{{ URL::asset('/') }}image/mobile2.0/tx_4.png" alt="" class="tx">
        <div style="float: left;margin-left: 0.3rem;margin-top: 0.3rem;">
            <p class="index_p2" style="color: #333;">Dr.-Ing. Martin lu<br />合伙人</p>
            <p class="index_p2">德国达姆斯塔特大学<br />东方学者，千人专家<br />上海应用技术大学特聘教授<br />精加工技术</p>
        </div>
    </div>
    <div class="index_div3">
        <img src="{{ URL::asset('/') }}image/mobile2.0/tx_5.png" alt="" class="tx">
        <div style="float: left;margin-left: 0.3rem;margin-top: 0.3rem;">
            <p class="index_p2" style="color: #333;">Dr.-Ing. Alexander Stroh<br />顾问</p>
            <p class="index_p2">TU Darmstadt<br />光学设计&精加工技术</p>
        </div>
    </div>
    <div class="h_50"></div>
</div>

@include('/common/mobile_footer_cn')

<div class="bg none">
    <div class="video">
        <img src="{{ URL::asset('/') }}image/mobile2.0/x_mobile.png" alt="" class="x">
        <video src="{{ URL::asset('/') }}video/video_main.mp4" controls="controls" id="v1" class="none"></video>
        <video src="{{ URL::asset('/') }}video/video_comfort.mp4" controls="controls" id="v2" class="none"></video>
        <video src="{{ URL::asset('/') }}video/video_charge.mp4" controls="controls" id="v3" class="none"></video>
        <video src="{{ URL::asset('/') }}video/video_1.mp4" controls="controls" id="v4" class="none"></video>
    </div>
</div>

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


    function swicth(num, span) {
        $(span).siblings("span").removeClass("index_span1");
        $(span).addClass("index_span1");
        if (num == 1) {
            $("#div1").show();
            $("#div1").siblings().hide()
        } else if (num == 2) {
            $("#div2").show();
            $("#div2").siblings().hide()
        } else if (num == 3) {
            $("#div3").show();
            $("#div3").siblings().hide()
        } else if (num == 4) {
            $("#div4").show();
            $("#div4").siblings().hide()
        }
        else if (num == 5) {
            $("#div5").show();
            $("#div5").siblings().hide()
        }
    }

    function play(a){
        $(".bg").show();
        if(a==1){
            $("#v1").attr("src","{{ URL::asset('/') }}video/video_main.mp4")
            $("#v1").css("display","block")
        }else if(a==2){
            $("#v2").attr("src","{{ URL::asset('/') }}video/video_comfort.mp4")
            $("#v2").css("display","block")
        }else if(a==3){
            $("#v3").attr("src","{{ URL::asset('/') }}video/video_charge.mp4")
            $("#v3").css("display","block")
        }else if(a==4){
            $("#v4").attr("src","{{ URL::asset('/') }}video/video_1.mp4")
            $("#v4").css("display","block")
        }
    }

    $(".x").click(function () {
        $(".bg").hide();
        $("video").attr("src","")
        $("video").css("display","none")

    })

    $(".bg").click(function () {
        $(this).hide();
        $("video").css("display", "none")
    })
    $("video").on('click', function (e) {
        e.stopPropagation();
    });
</script>

</html>
