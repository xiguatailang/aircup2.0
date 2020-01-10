
<link rel="stylesheet" href="{{ URL::asset('css/mobile_common.css') }}">
<script src="{{ URL::asset('js/jquery.cookie.min.js') }}"></script>

<!-- nav_1.png需要覆盖原来的img文件夹里的 -->
<nav>
        <span>
            <img src="{{ URL::asset('/') }}image/mobile2.0/nav_1.png" alt="" class="nav_1" onclick="menu()" />
        </span>
    <a href="{{ url('/') }}">
        <img src="{{ URL::asset('/') }}image/mobile2.0/nav_2.png" alt="" class="nav_2" />
    </a>
    <a href="https://www.kickstarter.com/projects/aircup/light-video-a-pair-of-magic-ar-smart-glasses?ref=guanwang_cn" target="_blank">
        <img src="{{ URL::asset('/') }}image/mobile2.0/nav_3.png" alt="" class="nav_3" />
    </a>
</nav>
<div class="menu">
    <ul>
        <li><a href="{{ url('/') }}">HOME</a></li>
        <li><a href="{{ url('/creation') }}">THE CREATION</a></li>
        <li><a href="{{ url('/about') }}">ABOUT US</a></li>
        <li><a href="https://www.kickstarter.com/projects/aircup/light-video-a-pair-of-magic-ar-smart-glasses?ref=guanwang_cn" target="_blank">PRE-ORDER</a></li>
        <li onclick="lan()"><span>中&nbsp;/&nbsp;EN</span></li>
    </ul>
</div>

<script>
    function lan(){
        var language = $.cookie('language');
        if(language=="en"){
            $.cookie('language', 'cn', { expires: 30 });
        }else{
            $.cookie('language', 'en', { expires: 30 });
        }
        window.location.reload();
    }
    function menu(){
        $(".menu").slideToggle("fast");
    }

    $("body").click(function () {
        $(".menu").slideUp("fast")
    })
    $(".menu,nav").on('click', function (e) {
        e.stopPropagation();
    });

</script>
