<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Home</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="full-screen" content="yes" />
    <meta name="x5-fullscreen" content="true" />
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/mobile_detail2.0.css" />
    <script src="{{ URL::asset('/') }}js/jquery.min.js"></script>

</head>

<body>

@include('/common/mobile_navigation_en')

<!-- 上面头部代码直接复制替换原来的html -->
<p class="index_p1" style="padding-top: 1.4rem;">Light Video <br />The Best Phone Game Partner</p>
<span class="video_play" style="margin: 0.6rem auto 0 auto;" onclick="play(1)">Watch The Video</span>
<a href="https://www.kickstarter.com/projects/aircup/light-video-a-pair-of-magic-ar-smart-glasses?ref=guanwang_cn" target="_blank" class="pre_a">Pre-order</a>
<img src="{{ URL::asset('/') }}image/mobile2.0/index_1.png" alt="" class="index_img">
<p class="index_p1">HDTV for mobile</p>
<p class="index_p2">“Light Video” has 1920 * 1080 definition and a large 80-inch screen, and it is your private
    mobile high-definition theater. Stretching out on a sofa with some coffee and snacks, you can enjoy a good movie
    any time anywhere.</p>
<img src="{{ URL::asset('/') }}image/mobile2.0/index_2.png" alt="" class="index_img">
<p class="index_p1">Thin and fashionable</p>
<p class="index_p2">“Light Video” weights around 62 grams, the weight of an egg,Whether you are in a trip or stay in
    home, “Light Video ”can bring happiness to your life. </p>
<img src="{{ URL::asset('/') }}image/mobile2.0/index_3.png" alt="" class="index_img">
<p class="index_p1">Play games with friends</p>
<p class="index_p2">“Light Video” can support all games in you phone, so you can change games any time you like. The
    battery can last for 7 hours, guaranteeing carefree relaxation with your friends. </p>
<img src="{{ URL::asset('/') }}image/mobile2.0/index_4.png" alt="" class="index_img">
<p class="index_p1">"Light Video" glasses focus on: <br />Display, Sound and Comfort.</p>
<p class="index_p2">We have spent 3 years designing and perfecting "Light Video" glasses, mainly in order to create
    an incredible visual experience. We have always believed that the supporting technology of "Light Video" glasses
    should highlight wonderful visual experience. The design of this product focuses on three aspects: Display,
    Sound and Comfort. First, the display effect must be perfect; Second, the sound must be pleasing to the ear, to
    the extent that the users are able to recognize the difference between treble and bass; Last but most important,
    it should be comfortable to wear. Even if you wear it all day, it won't make you feel uncomfortable.</p>
<img src="{{ URL::asset('/') }}image/mobile2.0/index_5_cn_bop.jpeg" alt="" class="index_img" style="margin-left: auto;margin-right: auto;">
<div class="h_50"></div>
<p class="index_p1">Technical Characteristics</p>
<div class="index_div1">
    <span class="index_span1" onclick="swicth(1,this)">Display</span>
    <span onclick="swicth(2,this)">Sound</span>
    <span onclick="swicth(3,this)">Comfort</span>
    <span onclick="swicth(5,this)">Weight</span>
    <span onclick="swicth(4,this)">Charge</span>
</div>
<div class="index_div2">
    <div class="index_div2_1" id="div1">
        <p class="index_p2 p_t30">The glasses use a display screen only of the size of a thumb, but with a density
            of 5648 pixels per inch that can be called "a super retinal screen". This technology is also a leading
            technology in the industry globally. We cooperate with Apple's screen suppliers to ensure the screen
            quality.</p>
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
                <td>Contrast</td>
            </tr>
        </table>
        <table class="index_table m_t20">
            <tr class="index_tr1">
                <td>0.39inch</td>
                <td>1920 x 1080 </td>
                <td>800cd/m2</td>
            </tr>
            <tr class="index_tr2">
                <td>Screen size</td>
                <td>Resolution</td>
                <td>Peak luminance</td>
            </tr>
        </table>
    </div>
    <div class="index_div2_1" style="display: none;" id="div2">
        <p class="index_p2 p_t30">In terms of sound, the glasses have a near-ear stereo surround sound effect, which
            has high sound quality without disturbing others. There is a speaker on each temple with left and right
            placement to produce stereo channel.</p>
        <img src="{{ URL::asset('/') }}image/mobile2.0/index_6_2.jpeg" alt="" class="index_img2">
    </div>
    <div class="index_div2_1" style="display: none;" id="div3">
        <p class="index_p2 p_t40">The "Light Video" glasses adopts a compatible design for both men and women, which
            can fit 95% of the head size in the world. The bending degree of the nasal brace can be adjusted by hand
            to adapt to pad arms of different shapes. In addition, the nose pad can be freely replaced according to
            the different needs of each person.</p>
        <img src="{{ URL::asset('/') }}image/mobile2.0/index_6_3.jpeg" alt="" class="index_img2">
        <span class="video_play" style="position: absolute;bottom: 0.1rem;left: 2.2rem;" onclick="play(2)">Watch The
                Video</span>
    </div>
    <div class="index_div2_1" style="display: none;" id="div5">
        <p class="index_p2 p_t30">Generally, people tend to indulge in watching videos and playing mobile games,  Therefore, we need a pair of light glasses. We are striving to reduce the weight of "Light Video" glasses. At present, the one pair weighs less than 62.7g, which is equivalent to 3 pairs of prescription glasses only.</p>
        <img src="{{ URL::asset('/') }}image/mobile2.0/index_6_5.jpeg" alt="" class="index_img2">
    </div>
    <div class="index_div2_1" style="display: none;" id="div4">
        <p class="index_p2 p_t40">The glasses have a battery powerof 7000mAh(typ)/h, which will allow you to enjoy
            the video for 7 hours or play games for 4 hours. They are equipped with USB Type-C double-sided charging
            interface, which can support blind insertion at night. Its host supports PD fast charging protocol,
            which supports being fully charged for only 1-2 hours.</p>
        <img src="{{ URL::asset('/') }}image/mobile2.0/index_6_4.png" alt="" class="index_img2">
        <span class="video_play" style="position: absolute;bottom: 0.2rem;left: 2rem;" onclick="play(3)">Watch The
                Video</span>
    </div>
</div>
<div class="bg_f7">
    <p class="index_p1">Device Support</p>
    <p class="index_p2">No matter what device you are using (e.g. mobile phone, tablet, computer), you can connect
        it with the glasses. You don't need to change a new mobile phone or buy a new device. "Light Video" glasses
        are compatible with the following systems: Android/iOS/MacOS, so you can use different devices to
        connect to them and watch videos in the glasses.It will be compatible with Windows in the future.</p>
    <div style="padding-bottom: 0.4rem;position: relative;">
        <img src="{{ URL::asset('/') }}image/mobile2.0/index_7.png" alt="" class="index_img" style="margin-top:-0.3rem;">
        <span class="video_play" style="position: absolute;bottom: 1.6rem;left: 3.6rem;" onclick="play(4)">Watch The
                Video</span>
    </div>
</div>

<!-- 新加 -->
<p class="index_p1">Media Coverage </p>
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
<p class="index_p1">User Evaluation</p>
<p class="index_p2">When we first designed "Light Video" glasses, we had face-to-face conversations with 128 people
    and exchanged our ideas with them to verify whether the product can solve their problems during the
    106-hour-long conversation.
    After we finished the prototype glasses, we invited dozens of users to try on "Light Video" glasses. They gave
    positive responses that we are doing something special.</p>
<div class="talk ov">
    <div class="photo">
        <img src="{{ URL::asset('/') }}image/mobile2.0/talk_1.png" alt="">
        <span>Mr.Wang</span>
    </div>
    <p style="margin-left: 0.2rem;">This strategy and technology of "Light Video" glasses show the correct
        development direction of AR technology in the future. With AR, I can experience both the simulated reality
        and the real world. Therefore, as a technology enthusiast, I am very excited to finally have a pair of AR
        glasses that I can often use. </p>
</div>
<div class="talk ov">
    <p>Compared with other flashy technology products, "Light Video" glasses are very practical. The product has
        removed a lot of functions that we don't need, and it is just fine with very reasonable price.</p>
    <div class="photo" style="margin-left: 0.3rem;">
        <img src="{{ URL::asset('/') }}image/mobile2.0/talk_2.png" alt="">
        <span>Mr.Xu</span>
    </div>
</div>
<div class="talk ov">
    <div class="photo">
        <img src="{{ URL::asset('/') }}image/mobile2.0/talk_3.png" alt="">
        <span>Summer</span>
    </div>
    <p style="margin-left: 0.2rem;">Whether I’m at home or on the road, "Light Video" glasses can bring me great
        experience. It is really great. Moreover, in terms of appearance, they are also better than similar
        products.</p>
</div>
<div class="talk ov">
    <p>I watch videos every day, sometimes for 1 -3 hours. Especially during holidays, I watch for a longer time.
        When the showed me "Light Video" product, I was amazed it. I was like, oh my God! If I had these glasses, my
        hands would never feel tired any more when I’m watching videos. "</p>
    <div class="photo" style="margin-left: 0.3rem;">
        <img src="{{ URL::asset('/') }}image/mobile2.0/talk_4.png" alt="">
        <span>Ms.Ma</span>
    </div>
</div>
<div class="h_50"></div>
<i class="line"></i>
<!-- 新加 -->


<p class="index_p1">Technical Parameters</p>
<p class="index_p3 m_t40">The screen</p>
<p class="index_p2 m_t10">0.39 inches (diagonal)<br />
    Micro AMOLED Screen<br />
    Resolution：1920X1080 FHD | PPI:5648<br />
    Screen brightness：800nit (HBM)<br />
    High Contrast：10000:1<br />
    Wide Color Gamut Display： NTSC 75% (Typ)<br />
    HDR display supported</p>
<i class="line"></i>
<p class="index_p3 m_t40">Battery</p>
<p class="index_p2 m_t10">7000mAh (typ)<br />
    Built in 4.35v high voltage lithium-ion polymer battery</p>
<i class="line"></i>
<p class="index_p3 m_t40">USB Type-C Interface</p>
<p class="index_p2 m_t10">Enhanced by offering reversible plugand cable directions<br />
    Support USB Type-C Specification<br />
    Support try.SRC Role</p>
<i class="line"></i>
<p class="index_p3 m_t40">Support for PD fast charging protoco</p>
<p class="index_p2 m_t10">Output Charge Protocol:<br />
    Support BC1.2 DCP (5V/500mA)<br /><br />
    Input Fast Charge Protocol:<br />
    Support PD3.0/PD2.0</p>
<i class="line"></i>
<p class="index_p3 m_t40">Protection</p>
<p class="index_p2 m_t10">
    Input Over Voltage Protection<br />
    Output Over Current Protection<br />
    Output Short Protection<br />
    Charger Over Time Protection<br />
    Charger Over Voltage Protection<br />
    Over Temperature Protection
</p>
<i class="line"></i>
<p class="index_p3 m_t40">Network</p>
<p class="index_p2 m_t10">
    WLAN protocol：IEEE 802.11b/g/n/ac <br />
    WLAN frequency：2.412GHz ~ 2.485GHz <br />
    5.125GHz ~ 5.845GHz (5.0 GHz ISM Band) Light video
</p>
<i class="line"></i>
<p class="index_p3 m_t40">Light video</p>
<p class="index_p2 m_t10">
    Length: 157mm<br />
    Width: 74.64mm<br />
    Height: 40.94mm<br />
    Weight: 63g
</p>
<img src="{{ URL::asset('/') }}image/mobile2.0/index_8.png" alt="" style="width: 70%;display: block;margin-left: 1.6rem;">
<p class="index_p3 m_t40">Computer</p>
<p class="index_p2 m_t10">
    Length: 141mm<br />
    Width: 55mm<br />
    Height: 14.48 mm<br />
    Weight: 150
</p>
<img src="{{ URL::asset('/') }}image/mobile2.0/index_9.png" alt="" style="width: 65%;display: block;margin: 0.3rem auto 0 1.5rem;">
<p class="index_p3 m_t40">Data line</p>
<p class="index_p2 m_t10">
    Length: 100cm<br />
    Interface type: usb-c / usb-a<br />
    Material: TPE<br />
    Weight: 28g
</p>
<img src="{{ URL::asset('/') }}image/mobile2.0/index_10.png" alt="" style="width: 40%;display: block;margin: 0.2rem auto 0 auto;">
<i class="line"></i>
<p class="index_p3 m_t40">Spk</p>
<p class="index_p2 m_t10">
    Two 1506 speakers
</p>
<i class="line"></i>
<p class="index_p3 m_t40">SAudio formatpk</p>
<p class="index_p2 m_t10">
    MP1/MP2/MP3、WMA、OGG， ADPCM-WAV,<br />
    PCM-WAV、AAC
</p>
<i class="line"></i>
<p class="index_p3 m_t40">Video format</p>
<p class="index_p2 m_t10">
    avi、divx、mkv、ts、dat、vob、mpg、mpeg、mov、mp4、<br />
    rm、rmvb、wmv
</p>
<i class="line"></i>
<p class="index_p3 m_t40">Sensor</p>
<p class="index_p2 m_t10">
    Proximity Sensing，For saving battery life
</p>
<i class="line"></i>
<p class="index_p3 m_t40">Packing list</p>
<p class="index_p2 m_t10">
    glasses ，host，USB3.0 data cable，glasses cloth，<br />
    Startup GuideOperating Instructions，exquisite gift box
</p>
<p class="index_p3 m_t40"></p>
<div class="bg_f7">
    <p class="index_p1">Team</p>
    <p class="index_p2">
        Aircup’s team members are in Germany and China. Chinese team is responsible for product R & D, procurement,
        production, and marketing. German team provides technical support.
    </p>
    <p class="index_p3 m_t40">Chinese Team</p>
    <div class="index_div3 m_t20">
        <img src="{{ URL::asset('/') }}image/mobile2.0/tx_1.png" alt="" class="tx">
        <div style="float: left;margin-left: 0.3rem;margin-top: 0.3rem;">
            <p class="index_p2" style="color: #333;">Daniel<br />CEO and founder</p>
            <p class="index_p2">Years of entrepreneurial experience in<br />smart glasses</p>
        </div>
    </div>
    <div class="index_div3">
        <img src="{{ URL::asset('/') }}image/mobile2.0/tx_2.png" alt="" class="tx">
        <div style="float: left;margin-left: 0.3rem;margin-top: 0.2rem;">
            <p class="index_p2" style="color: #333;">Junfeng Guo<br />Engineer</p>
            <p class="index_p2">Senior Software Engineer<br />Second prize of robot
                programming<br />competition<br /></p>
        </div>
    </div>
    <div class="index_div3">
        <img src="{{ URL::asset('/') }}image/mobile2.0/tx_3.png" alt="" class="tx">
        <div style="float: left;margin-left: 0.3rem;margin-top: 0.42rem;">
            <p class="index_p2" style="color: #333;">Haijing Guan<br />Engineer</p>
            <p class="index_p2">Senior Electronic Engineer</p>
        </div>
    </div>
    <p class="index_p3 m_t40">German Team</p>
    <div class="index_div3 m_t20" style="height: 3.0rem;">
        <img src="{{ URL::asset('/') }}image/mobile2.0/tx_4.png" alt="" class="tx" style="margin-top: 0.8rem;">
        <div style="float: left;margin-left: 0.3rem;margin-top: 0.3rem;">
            <p class="index_p2" style="color: #333;">Dr.-Ing. Martin lu<br />Copartner</p>
            <p class="index_p2">Oriental scholar, Thousand Talents<br /> Plan Expert,Distinguished Professor of <br />Shanghai Institute of Technology<br />Finish Machining</p>
        </div>
    </div>
    <div class="index_div3">
        <img src="{{ URL::asset('/') }}image/mobile2.0/tx_5.png" alt="" class="tx">
        <div style="float: left;margin-left: 0.3rem;margin-top: 0.3rem;">
            <p class="index_p2" style="color: #333;">Dr.-Ing. Alexander Stroh<br />Consulting</p>
            <p class="index_p2">TU Darmstadt<br />Optical Design & Finish Machining</p>
        </div>
    </div>
    <div class="h_50"></div>
</div>

@include('/common/mobile_footer_en')

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
