<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>首页</title>
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/web_details2.0.css" />
    <script src="{{ URL::asset('/') }}js/jquery.min.js"></script>
    <script src="{{ URL::asset('/') }}js/slider.js"></script>


</head>

<body>

@include('/common/web_navigation_cn')

<div class="w_1200">
{{--    <p class="index_p1">轻影<sup style="font-size: 40px;color: #666666;">TM</sup></p>--}}
    <p class="index_p1"><img src="{{ URL::asset('/') }}image/web/titile_tm.jpeg" alt=""></p>
    <p class="index_p2">最好的手机游戏伴侣</p>
    <p class="index_p3">AR眼镜给你更极致的游戏体验</p>
    <div class="index_div1 ov">
        <span class="video_play left" onclick="play(1)">观看影片</span>
        <a href="https://www.kickstarter.com/projects/aircup/light-video-a-pair-of-magic-ar-smart-glasses?ref=guanwang_cn" target="_blank" class="pre_a right">预订购买</a>
    </div>
</div>
<img src="{{ URL::asset('/') }}image/web/detail_index_1.png" alt="" class="index_img1">
<p class="index_p4 w_1200">
    设计轻影的初心是给大家带来快乐，<br />并且让一切都变得简单方便。<br />轻影为观影和游戏而生！
</p>

<div class="slider" style="width: auto; position: relative;">
    <img src="{{ URL::asset('/') }}image/web/banner_1_cn.jpeg" alt="">
    <img src="{{ URL::asset('/') }}image/web/banner_2_cn.jpeg" alt="">
    <img src="{{ URL::asset('/') }}image/web/banner_3_cn.jpeg" alt="">
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('.slider').bxSlider({
            slideMargin: 10,
            auto: true
        });
    });
</script>
<div class="index_div2">
    <div class="w_1200">
        <p class="index_p5">轻影专注于:<br />显示、声音、佩戴舒适 </p>
        <p class="index_p6">我们耗费了3年时间设计和完善轻影，主要目标是创造一个令人难以置信的观影体验。我们一直认为轻影背后的技术应该突出观影体验，我们设计它就是为了这个目的。聚焦三个重点来设计这款产品：显示、声音、舒适性。我们要求显示效果非常清晰；声音悦耳，可以让使用者听出高音与低音的区别；最重要的是带着舒服，即使你一整天都带着它，也不会感到不适。</p>
    </div>
    <img src="{{ URL::asset('/') }}image/web/detail_index_2_cn.jpeg" alt="" style="display: block;margin: 100px auto 0 auto;">
</div>
<div class="index_div3">
    <p class="index_p5">技术特点</p>
    <div class="index_div3_1">
        <span class="index_span1 index_span5">显示</span>
        <span class="index_span2">声音</span>
        <span class="index_span3">舒适</span>
        <span class="index_span6">重量</span>
        <span class="index_span4">充电</span>
    </div>
    <div class="index_div4_1 w_1200">
        <p class="index_p6">仅有小拇指大小的显示屏，却拥有5648的像素密度，堪称超级视网膜屏。这项技术在全球范围内也属领先技术。我们与美国Apple公司的屏幕供应商合作，确保屏幕的质量。</p>
        <img src="{{ URL::asset('/') }}image/web/index_3_1.png" alt="" style="display: block;margin: 50px auto 0 auto;">
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
        <table class="index_table">
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
    <div class="index_div4_2 none">
        <div class="w_1200">
            <p class="index_p6" style="color: #fff;padding-top: 60px;">在声音方面，近耳式立体环绕音效，音质清晰且不打扰他人。镜腿两侧分别有一个扬声器，左右分离，立体声道。</p>
        </div>
    </div>
    <div class="index_div4_3 none">
        <div class="w_1200">
            <p class="index_p6" style="padding-top: 60px;">轻影的尺寸做了男女通用的兼容设计，满足全球95%的头部尺寸。鼻托杆可以用手调整弯曲度，以适应鼻梁的不同。鼻托可以更换，根据每个人的不同，自由选择。</p>
            <span class="video_play" style="margin-top: 620px;margin-left: 370px;" onclick="play(2)">Watch The
                    video</span>
        </div>
    </div>
    <div class="index_div4_6 none">
        <div class="w_1200">
            <p class="index_p6" style="padding-top: 60px;">人们看视频和玩手游的时间通常都很久，因此我们需要一款轻盈的眼镜。轻影努力的降低重量，目前整机重量62.7g，仅相当3幅处方眼镜。</p>
        </div>
    </div>
    <div class="index_div4_4 none">
        <div class="w_1200">
            <p class="index_p6" style="color: #fff;padding-top: 60px;">7000mAh(typ)/h的高续航电池，酣畅观影7小时，打游戏4个小时，USB Type-C双面充电接口，支持在夜间盲插。主机支持PD快充协议，1-2小时即可充满电。</p>
            <span class="video_play" style="margin-top: 560px;margin-left: 370px;" onclick="play(3)">观看影片</span>
        </div>
    </div>
</div>
<div class="index_div2">
    <div class="w_1200" style="position: relative;">
        <p class="index_p5">设备兼容性</p>
        <p class="index_p6">无论你现在使用什么设备（手机、平板、电脑）都可以连接。无需为此，再去换一部新手机或单独购买。我们的系统兼容：Android/iOS/MacOS，您可以用不同设备进行连接，在眼镜中观看。未来兼容Windows。</p>
        <img src="{{ URL::asset('/') }}image/web/index_4.png" alt="" style="display: block;margin: 20px auto 0 auto;">
        <span class="video_play" style="position: absolute;bottom: 210px;left: 550px;" onclick="play(4)">观看影片</span>
    </div>
</div>


<!-- 新加 -->
<div class="index_div5 w_1200">
    <p class="index_p5">媒体报道 </p>
    <div class="icon">
        <img src="{{ URL::asset('/') }}image/web//new_1.png" alt="">
        <img src="{{ URL::asset('/') }}image/web//new_2.png" alt="">
        <img src="{{ URL::asset('/') }}image/web//new_3.png" alt="">
    </div>
    <div class="icon" style="align-items:center">
        <img src="{{ URL::asset('/') }}image/web//new_4.png" alt="">
        <img src="{{ URL::asset('/') }}image/web//new_5.png" alt="">
        <img src="{{ URL::asset('/') }}image/web//new_6.png" alt="">
    </div>
    <div class="icon" style="align-items:center">
        <img src="{{ URL::asset('/') }}image/web//new_7.png" alt="">
        <img src="{{ URL::asset('/') }}image/web//new_8.png" alt="">
        <img src="{{ URL::asset('/') }}image/web//new_9.png" alt="">
    </div>
    <div class="icon" style="align-items:center">
        <img src="{{ URL::asset('/') }}image/web//new_10.png" alt="">
        <img src="{{ URL::asset('/') }}image/web//new_11.png" alt="">
        <img src="{{ URL::asset('/') }}image/web//new_12.png" alt="">
    </div>
    <div class="icon" style="align-items:center;margin-top: 30px;">
        <img src="{{ URL::asset('/') }}image/web//new_13.png" alt="">
        <img src="{{ URL::asset('/') }}image/web//new_14.png" alt="">
        <img src="{{ URL::asset('/') }}image/web//new_15.png" alt="">
    </div>
    <div class="icon">
        <img src="{{ URL::asset('/') }}image/web//new_16.png" alt="">
        <img src="{{ URL::asset('/') }}image/web//new_17.png" alt="">
        <img src="{{ URL::asset('/') }}image/web//new_18.png" alt="">
    </div>
    <div class="icon">
        <img src="{{ URL::asset('/') }}image/web//new_19.png" alt="">
        <img src="{{ URL::asset('/') }}image/web//new_20.png" alt="" style="height: 59px;">
        <img src="{{ URL::asset('/') }}image/web//new_21.png" alt="">
    </div>
</div>
<div class="index_div5 w_1200">
    <p class="index_p5">用户评价</p>
    <p class="index_p6">
        在设计轻影之初，我们曾与128人面对面的交谈，交换想法，验证这个产品能否解决用户问题。这种交流，累计时长达到106个小时。
        当我们完成了样机之后，向数十位用户展示轻影。他们的反应非常积极，这是一个肯定的信号，表明我们正在做一些特别的事情。</p>
    <img src="{{ URL::asset('/') }}image/web/talk_cn.jpeg" alt="" style="margin-top: 80px;display: block;">

</div>
<div class="w_1200"><i class="line"></i></div>


<div class="index_div5 w_1200">
    <p class="index_p5">技术参数</p>
    <div class="ov" style="margin-top: 80px;">
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">屏幕</li>
                <li class="index_li2">0.39英寸(对角线)</li>
                <li class="index_li2">Micro AMOLED Screen</li>
                <li class="index_li2">分辨率：1920X1080 FHD | PPI:5648</li>
                <li class="index_li2">屏幕亮度：800nit (HBM)</li>
                <li class="index_li2">高对比度：10000:1</li>
                <li class="index_li2">NTSC：75% (Typ)</li>
{{--                <li class="index_li2">HDR display supported</li>--}}
            </ul>
        </div>
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">电池</li>
                <li class="index_li2">7000mAh (typ)</li>
                <li class="index_li2">内置4.35V高压锂离子聚合物电池</li>
            </ul>
        </div>
    </div>
    <i class="line"></i>
    <div class="ov" style="margin-top: 80px;">
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">USB Type-C 充放电接口</li>
                <li class="index_li2">方向与主从自动识别</li>
                <li class="index_li2">支持USB Typc-C 标准接口</li>
                <li class="index_li2">支持SRC协议仲裁</li>
{{--                <li class="index_li2">Support try.SRC Role</li>--}}
            </ul>
        </div>
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">支持的PD快充协议</li>
                <li class="index_li2">对外充电:</li>
                <li class="index_li2">Support BC1.2 DCP (5V/500mA)</li>
                <li class="index_li2" style="margin-top: 40px;">对内输入快充:</li>
                <li class="index_li2">Support PD3.0/PD2.0</li>
            </ul>
        </div>
    </div>
    <div class="ov" style="margin-top: 80px;">
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">充放电部分的安全防护</li>
                <li class="index_li2">输入过压保护</li>
                <li class="index_li2">输出过流保护</li>
                <li class="index_li2">输出短接保护</li>
                <li class="index_li2">充电超时保护</li>
                <li class="index_li2">充电过压保护</li>
                <li class="index_li2">超温保护</li>
            </ul>
        </div>
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">网络</li>
                <li class="index_li2">WLAN 协议：IEEE 802.11b/g/n/ac </li>
                <li class="index_li2">WLAN 频率：2.412GHz ~ 2.485GHz </li>
                <li class="index_li2">5.125GHz ~ 5.845GHz (5.0 GHz ISM Band) Light video</li>
            </ul>
        </div>
    </div>
    <i class="line"></i>
    <div class="ov" style="margin-top: 80px;">
        <div class="index_div5_1 left" style="width: 45%;">
            <ul class="index_ul1">
                <li class="index_li1">眼镜</li>
                <li class="index_li2">长度: 157mm</li>
                <li class="index_li2">宽度: 74.64mm</li>
                <li class="index_li2">高度: 40.94mm</li>
                <li class="index_li2">重量: 63g</li>
            </ul>
        </div>
        <div class="index_div5_1 left">
            <img src="{{ URL::asset('/') }}image/web/index_5_cn.jpeg" alt="" style="display: block;">
        </div>
    </div>
    <div class="ov" style="margin-top: 100px;">
        <div class="index_div5_1 left" style="width: 45%;">
            <ul class="index_ul1">
                <li class="index_li1">主机</li>
                <li class="index_li2">长度: 141mm</li>
                <li class="index_li2">宽度: 55mm</li>
                <li class="index_li2">高度: 14.48 mm</li>
                <li class="index_li2">重量: 150g</li>
            </ul>
        </div>
        <div class="index_div5_1 left">
            <img src="{{ URL::asset('/') }}image/web/index_6_cn.jpeg" alt="" style="display: block;">
        </div>
    </div>
    <div class="ov" style="margin-top: 100px;">
        <div class="index_div5_1 left" style="width: 45%;">
            <ul class="index_ul1">
                <li class="index_li1">数据线</li>
                <li class="index_li2">长度: 100cm</li>
                <li class="index_li2">接口类型: usb-c / usb-a</li>
                <li class="index_li2">材质: TPE</li>
                <li class="index_li2">重量: 28g</li>
            </ul>
        </div>
        <div class="index_div5_1 left">
            <img src="{{ URL::asset('/') }}image/web/index_7.png" alt="" style="display: block;">
        </div>
    </div>
    <i class="line"></i>
    <div class="ov" style="margin-top: 50px;">
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">扬声器</li>
                <li class="index_li2">两枚1506扬声器</li>
            </ul>
        </div>
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">音频格式</li>
                <li class="index_li2">MP1/MP2/MP3、WMA、OGG，</li>
                <li class="index_li2">ADPCM-WAV,PCM-WAV、AAC</li>
            </ul>
        </div>
    </div>
    <i class="line"></i>
    <div class="ov">
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">视频格式</li>
                <li class="index_li2">avi、divx、mkv、ts、dat、vob、mpg、</li>
                <li class="index_li2">mpeg、mov、mp4、rm、rmvb、wmv</li>
            </ul>
        </div>
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">传感器</li>
                <li class="index_li2">红外距离传感器</li>
            </ul>
        </div>
    </div>
    <i class="line"></i>
    <div class="ov">
        <ul class="index_ul1">
            <li class="index_li1">包装清单</li>
            <li class="index_li2">智能眼镜、主机、USB 3.0 数据线、说明书、眼镜布、精美包装盒</li>
        </ul>
    </div>
</div>
<div class="index_div2">
    <div class="w_1200">
        <p class="index_p5">团队</p>
        <p class="index_p6">Aircup公司团队成员分别在德国和中国。中国团队负责产品研发，采购、组织生产，市场运营等工作，德国团队提供技术支持。</p>
        <div class="ov">
            <div class="index_div5_1 left">
                <p class="index_p7">中国团队</p>
                <div class="ov" style="margin-top: 40px;">
                    <img src="{{ URL::asset('/') }}image/web/tx_1.png" alt="" class="left">
                    <p class="left index_p8">人民大学EMBA<br />多年智能眼镜创业经验</p>
                </div>
                <p class="index_p9">郑乃铭</p>
                <p class="index_p10">CEO&创始人</p>
                <div class="ov" style="margin-top: 50px;">
                    <img src="{{ URL::asset('/') }}image/web/tx_2.png" alt="" class="left">
                    <p class="left index_p8">资深软件工程师<br />机器人编程大赛二等奖</p>
                </div>
                <p class="index_p9">郭军峰</p>
                <p class="index_p10">工程师</p>
                <div class="ov" style="margin-top: 50px;">
                    <img src="{{ URL::asset('/') }}image/web/tx_3.png" alt="" class="left">
                    <p class="left index_p8">资深电子工程师</p>
                </div>
                <p class="index_p9">关海京</p>
                <p class="index_p10">工程师</p>
            </div>
            <div class="index_div5_1 left">
                <p class="index_p7">德国团队</p>
                <div class="ov" style="margin-top: 40px;">
                    <img src="{{ URL::asset('/') }}image/web/tx_4.png" alt="" class="left">
                    <p class="left index_p8">德国达姆斯塔特大学<br />东方学者，千人专家<br />上海应用技术大学特聘教授<br />精加工技术</p>
                </div>
                <p class="index_p9">Dr.-Ing. Martin lu</p>
                <p class="index_p10">合伙人</p>
                <div class="ov" style="margin-top: 50px;">
                    <img src="{{ URL::asset('/') }}image/web/tx_5.png" alt="" class="left">
                    <p class="left index_p8">德国达姆斯塔特大学<br />光学设计&精加工技术</p>
                </div>
                <p class="index_p9">Dr. -Ing. Alexander Stroh</p>
                <p class="index_p10">顾问</p>
            </div>
        </div>

    </div>
</div>

@include('/common/web_footer_cn')

<div class="bg none">
    <div class="video">
        <img src="{{ URL::asset('/') }}image/web/x_web.png" alt="" class="x">
        <video src="{{ URL::asset('/') }}video/video_main.mp4" controls="controls" id="v1" class="none"></video>
        <video src="{{ URL::asset('/') }}video/video_comfort.mp4" controls="controls" id="v2" class="none"></video>
        <video src="{{ URL::asset('/') }}video/video_charge.mp4" controls="controls" id="v3" class="none"></video>
        <video src="{{ URL::asset('/') }}video/video_1.mp4" controls="controls" id="v4" class="none"></video>
    </div>
</div>


</body>
<script>
    $(".index_span1").click(function () {
        $(this).addClass("index_span5");
        $(this).siblings("span").removeClass("index_span5");
        $(".index_div4_1").show();
        $(".index_div4_2").hide();
        $(".index_div4_3").hide();
        $(".index_div4_4").hide();
        $(".index_div4_6").hide();
    })
    $(".index_span2").click(function () {
        $(this).addClass("index_span5");
        $(this).siblings("span").removeClass("index_span5");
        $(".index_div4_2").show();
        $(".index_div4_1").hide();
        $(".index_div4_3").hide();
        $(".index_div4_4").hide();
        $(".index_div4_6").hide();
    })
    $(".index_span3").click(function () {
        $(this).addClass("index_span5");
        $(this).siblings("span").removeClass("index_span5");
        $(".index_div4_3").show();
        $(".index_div4_2").hide();
        $(".index_div4_1").hide();
        $(".index_div4_4").hide();
        $(".index_div4_6").hide();
    })
    $(".index_span6").click(function () {
        $(this).addClass("index_span5");
        $(this).siblings("span").removeClass("index_span5");
        $(".index_div4_6").show();
        $(".index_div4_2").hide();
        $(".index_div4_3").hide();
        $(".index_div4_1").hide();
        $(".index_div4_4").hide();
    })
    $(".index_span4").click(function () {
        $(this).addClass("index_span5");
        $(this).siblings("span").removeClass("index_span5");
        $(".index_div4_4").show();
        $(".index_div4_2").hide();
        $(".index_div4_3").hide();
        $(".index_div4_1").hide();
        $(".index_div4_6").hide();
    })
    $(".bg").click(function () {
        $(this).hide();
        $("video").css("display","none")
    })
    $("video").on('click', function (e) {
        e.stopPropagation();
    });
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

</script>

</html>
