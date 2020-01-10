<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Home</title>
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/web_details2.0.css" />
    <script src="{{ URL::asset('/') }}js/jquery.min.js"></script>
    <script src="{{ URL::asset('/') }}js/slider.js"></script>
    {{--    <script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>--}}

</head>

<body>

@include('/common/web_navigation_en')

<div class="w_1200">
    <p class="index_p1">Light Video</p>
    <p class="index_p2">The Best Phone Game Partner</p>
    <p class="index_p3">Augmented reality glasses Give you a better gaming experience</p>
    <div class="index_div1 ov">
        <span class="video_play left" onclick="play(1)">Watch The video</span>
        <a href="https://www.kickstarter.com/projects/aircup/light-video-a-pair-of-magic-ar-smart-glasses?ref=guanwang_cn" target="_blank" class="pre_a right">Pre-order</a>
    </div>
</div>
<img src="{{ URL::asset('/') }}image/web/detail_index_1.png" alt="" class="index_img1">
<p class="index_p4 w_1200">
    The initial intention to design “Light Video” is to bring<br />more happiness to you, and to make
    everything<br />simple and convenient. Our product focuses on<br />video-watching and game-playing.
</p>

<div class="slider" style="width: auto; position: relative;">
    <img src="{{ URL::asset('/') }}image/web/banner_1.png" alt="">
    <img src="{{ URL::asset('/') }}image/web/banner_2.png" alt="">
    <img src="{{ URL::asset('/') }}image/web/banner_3.png" alt="">
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
        <p class="index_p5">"Light Video" glasses focus on:<br />Display, Sound and Comfort. </p>
        <p class="index_p6">We have spent 3 years designing and perfecting "Light Video" glasses, mainly in order to
            create an incredible visual experience. We have always believed that the supporting technology of "Light
            Video" glasses should highlight wonderful visual experience. The design of this product focuses on three
            aspects: Display, Sound and Comfort. First, the display effect must be perfect; Second, the sound must
            be pleasing to the ear, to the extent that the users are able to recognize the difference between treble
            and bass; Last but most important, it should be comfortable to wear. Even if you wear it all day, it
            won't make you feel uncomfortable.</p>
    </div>
    <img src="{{ URL::asset('/') }}image/web/detail_index_2_cn.jpeg" alt="" style="display: block;margin: 100px auto 0 auto;">
</div>
<div class="index_div3">
    <p class="index_p5">Technical Characteristics</p>
    <div class="index_div3_1">
        <span class="index_span1 index_span5">Display</span>
        <span class="index_span2">Sound</span>
        <span class="index_span3">Comfort</span>
        <span class="index_span6">Weight</span>
        <span class="index_span4">Charge</span>
    </div>
    <div class="index_div4_1 w_1200">
        <p class="index_p6">The glasses use a display screen only of the size of a thumb, but with a density of 5648
            pixels per inch that can be called "a super retinal screen". This technology is also a leading
            technology in the industry globally. We cooperate with Apple's screen suppliers to ensure the screen
            quality.</p>
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
                <td>Contrast</td>
            </tr>
        </table>
        <table class="index_table">
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
    <div class="index_div4_2 none">
        <div class="w_1200">
            <p class="index_p6" style="color: #fff;padding-top: 60px;">In terms of sound, the glasses have a
                near-ear stereo surround sound effect, which has high sound quality without disturbing others. There
                is a speaker on each temple with left and right placement to produce stereo channel.</p>
        </div>
    </div>
    <div class="index_div4_3 none">
        <div class="w_1200">
            <p class="index_p6" style="padding-top: 60px;">The "Light Video" glasses adopts a compatible design for
                both men and women, which can fit 95% of the head size in the world. The bending degree of the nasal
                brace can be adjusted by hand to adapt to pad arms of different shapes. In addition, the nose pad
                can be freely replaced according to the different needs of each person.</p>
            <span class="video_play" style="margin-top: 460px;margin-left: 370px;" onclick="play(2)">Watch The
                    video</span>
        </div>
    </div>
    <div class="index_div4_6 none">
        <div class="w_1200">
            <p class="index_p6" style="padding-top: 60px;">Generally, people tend to indulge in watching videos and playing mobile games,  Therefore, we need a pair of light glasses. We are striving to reduce the weight of "Light Video" glasses. At present, the one pair weighs less than 62.7g, which is equivalent to 3 pairs of prescription glasses only.</p>
        </div>
    </div>
    <div class="index_div4_4 none">
        <div class="w_1200">
            <p class="index_p6" style="color: #fff;padding-top: 60px;">The glasses have a battery powerof
                7000mAh(typ)/h, which will allow you to enjoy the video for 7 hours or play games for 4 hours. They
                are equipped with USB Type-C double-sided charging interface, which can support blind insertion at
                night. Its host supports PD fast charging protocol, which supports being fully charged for only 1-2
                hours.</p>
            <span class="video_play" style="margin-top: 560px;margin-left: 370px;" onclick="play(3)">Watch The
                    video</span>
        </div>
    </div>
</div>
<div class="index_div2">
    <div class="w_1200" style="position: relative;">
        <p class="index_p5">Device Support</p>
        <p class="index_p6">No matter what device you are using (e.g. mobile phone, tablet, computer), you can
            connect it with the glasses. You don't need to change a new mobile phone or buy a new device. "Light
            Video" glasses are compatible with the following systems: Android/iOS/MacOS, so you can use
            different devices to connect to them and watch videos in the glasses.It will be compatible with Windows in the future.</p>
        <img src="{{ URL::asset('/') }}image/web/index_4.png" alt="" style="display: block;margin: 20px auto 0 auto;">
        <span class="video_play" style="position: absolute;bottom: 210px;left: 550px;" onclick="play(4)">Watch The
                video</span>
    </div>
</div>


<!-- 新加 -->
<div class="index_div5 w_1200">
    <p class="index_p5">Media Coverage </p>
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
    <p class="index_p5">User Evaluation</p>
    <p class="index_p6">
        When we first designed "Light Video" glasses, we had face-to-face conversations with 128 people and exchanged our ideas with them to verify whether the product can solve their problems during the 106-hour-long conversation.
        After we finished the prototype glasses, we invited dozens of users to try on "Light Video" glasses. They gave positive responses that we are doing something special.</p>
    <img src="{{ URL::asset('/') }}image/web/talk.jpeg" alt="" style="margin-top: 80px;display: block;">

</div>
<div class="w_1200"><i class="line"></i></div>


<div class="index_div5 w_1200">
    <p class="index_p5">Technical Parameters</p>
    <div class="ov" style="margin-top: 80px;">
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">The screen</li>
                <li class="index_li2">0.39 inches (diagonal)</li>
                <li class="index_li2">Micro AMOLED Screen</li>
                <li class="index_li2">Resolution：1920X1080 FHD | PPI:5648</li>
                <li class="index_li2">Screen brightness：800nit (HBM)</li>
                <li class="index_li2">High Contrast：10000:1</li>
                <li class="index_li2">Wide Color Gamut Display： NTSC 75% (Typ)</li>
{{--                <li class="index_li2">HDR display supported</li>--}}
            </ul>
        </div>
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">Battery</li>
                <li class="index_li2">7000mAh (typ)</li>
                <li class="index_li2">Built in 4.35v high voltage lithium-ion polymer battery</li>
            </ul>
        </div>
    </div>
    <i class="line"></i>
    <div class="ov" style="margin-top: 80px;">
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">USB Type-C Interface</li>
                <li class="index_li2">Enhanced by offering reversible plug</li>
                <li class="index_li2">and cable directions</li>
                <li class="index_li2">Support USB Type-C Specification</li>
                <li class="index_li2">Support try.SRC Role</li>
            </ul>
        </div>
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">Support for PD fast charging protoco</li>
                <li class="index_li2">Output Charge Protocol:</li>
                <li class="index_li2">Support BC1.2 DCP (5V/500mA)</li>
                <li class="index_li2" style="margin-top: 40px;">Input Fast Charge Protocol:</li>
                <li class="index_li2">Support PD3.0/PD2.0</li>
            </ul>
        </div>
    </div>
    <div class="ov" style="margin-top: 80px;">
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">Protection</li>
                <li class="index_li2">Input Over Voltage Protection</li>
                <li class="index_li2">Output Over Current Protection</li>
                <li class="index_li2">Output Short Protection</li>
                <li class="index_li2">Charger Over Time Protection</li>
                <li class="index_li2">Charger Over Voltage Protection</li>
                <li class="index_li2">Over Temperature Protection</li>
            </ul>
        </div>
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">Network</li>
                <li class="index_li2">WLAN protocol：IEEE 802.11b/g/n/ac </li>
                <li class="index_li2">WLAN frequency：2.412GHz ~ 2.485GHz </li>
                <li class="index_li2">5.125GHz ~ 5.845GHz (5.0 GHz ISM Band) Light video</li>
            </ul>
        </div>
    </div>
    <i class="line"></i>
    <div class="ov" style="margin-top: 80px;">
        <div class="index_div5_1 left" style="width: 45%;">
            <ul class="index_ul1">
                <li class="index_li1">Light video</li>
                <li class="index_li2">Length: 157mm</li>
                <li class="index_li2">Width: 74.64mm</li>
                <li class="index_li2">Height: 40.94mm</li>
                <li class="index_li2">Weight: 63g</li>
            </ul>
        </div>
        <div class="index_div5_1 left">
            <img src="{{ URL::asset('/') }}image/web/index_5.png" alt="" style="display: block;">
        </div>
    </div>
    <div class="ov" style="margin-top: 100px;">
        <div class="index_div5_1 left" style="width: 45%;">
            <ul class="index_ul1">
                <li class="index_li1">Computer</li>
                <li class="index_li2">Length: 141mm</li>
                <li class="index_li2">Width: 55mm</li>
                <li class="index_li2">Height: 14.48 mm</li>
                <li class="index_li2">Weight: 150</li>
            </ul>
        </div>
        <div class="index_div5_1 left">
            <img src="{{ URL::asset('/') }}image/web/index_6.png" alt="" style="display: block;">
        </div>
    </div>
    <div class="ov" style="margin-top: 100px;">
        <div class="index_div5_1 left" style="width: 45%;">
            <ul class="index_ul1">
                <li class="index_li1">Data line</li>
                <li class="index_li2">Length: 100cm</li>
                <li class="index_li2">Interface type: usb-c / usb-a</li>
                <li class="index_li2">Material: TPE</li>
                <li class="index_li2">Weight: 28g</li>
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
                <li class="index_li1">Spk</li>
                <li class="index_li2">Two 1506 speakers</li>
{{--                <li class="index_li2">Design of 0.7cc super large cavity</li>--}}
            </ul>
        </div>
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">Audio format</li>
                <li class="index_li2">MP1/MP2/MP3、WMA、OGG，</li>
                <li class="index_li2">ADPCM-WAV,PCM-WAV、AAC</li>
            </ul>
        </div>
    </div>
    <i class="line"></i>
    <div class="ov">
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">Video format</li>
                <li class="index_li2">avi、divx、mkv、ts、dat、vob、mpg、</li>
                <li class="index_li2">mpeg、mov、mp4、rm、rmvb、wmv</li>
            </ul>
        </div>
        <div class="index_div5_1 left">
            <ul class="index_ul1">
                <li class="index_li1">Sensor</li>
                <li class="index_li2">Proximity Sensing，For saving battery life</li>
            </ul>
        </div>
    </div>
    <i class="line"></i>
    <div class="ov">
        <ul class="index_ul1">
            <li class="index_li1">Packing list</li>
            <li class="index_li2">glasses ，host，USB3.0 data cable，glasses cloth，Startup GuideOperating
                Instructions，exquisite gift box</li>
        </ul>
    </div>
</div>
<div class="index_div2">
    <div class="w_1200">
        <p class="index_p5">Team</p>
        <p class="index_p6">Aircup’s team members are in Germany and China. Chinese team is responsible for product
            R & D, procurement, production, and marketing. German team provides technical support.</p>
        <div class="ov">
            <div class="index_div5_1 left">
                <p class="index_p7">Chinese Team</p>
                <div class="ov" style="margin-top: 40px;">
                    <img src="{{ URL::asset('/') }}image/web/tx_1.png" alt="" class="left">
                    <p class="left index_p8">Years of entrepreneurial experience in smart<br />glasses</p>
                </div>
                <p class="index_p9">Daniel</p>
                <p class="index_p10">CEO and founder</p>
                <div class="ov" style="margin-top: 50px;">
                    <img src="{{ URL::asset('/') }}image/web/tx_2.png" alt="" class="left">
                    <p class="left index_p8">Senior Software Engineer<br />Second prize of<br/> robot programming
                        competition</p>
                </div>
                <p class="index_p9">Junfeng Guo</p>
                <p class="index_p10">Engineer</p>
                <div class="ov" style="margin-top: 50px;">
                    <img src="{{ URL::asset('/') }}image/web/tx_3.png" alt="" class="left">
                    <p class="left index_p8">Senior Electronic Engineer</p>
                </div>
                <p class="index_p9">Haijing Guan</p>
                <p class="index_p10">Engineer</p>
            </div>
            <div class="index_div5_1 left">
                <p class="index_p7">German Team</p>
                <div class="ov" style="margin-top: 40px;">
                    <img src="{{ URL::asset('/') }}image/web/tx_4.png" alt="" class="left">
                    <p class="left index_p8">TU Darmstadt<br />Oriental scholar <br />Thousand Talents Plan Expert<br />Finish Machining</p>
                </div>
                <p class="index_p9">Dr.-Ing. Martin lu</p>
                <p class="index_p10">Copartner</p>
                <div class="ov" style="margin-top: 50px;">
                    <img src="{{ URL::asset('/') }}image/web/tx_5.png" alt="" class="left">
                    <p class="left index_p8">TU Darmstadt<br />Optical Design & Finish Machining</p>
                </div>
                <p class="index_p9">Dr. -Ing. Alexander Stroh</p>
                <p class="index_p10">Consulting</p>
            </div>
        </div>

    </div>
</div>

@include('/common/web_footer_en')

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
