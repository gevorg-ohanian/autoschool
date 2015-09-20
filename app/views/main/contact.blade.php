@extends('template.template')
@section('content')

<body class="contact_page">
<div id="hellopreloader">
    <div id="hellopreloader_preload">
        <div class="container">
            <div class="circle-contact ball stop"></div>
            <div class="circle-contact ball1 stop"></div>
            <p>Բեռնվում է...</p>
        </div>
    </div>
</div>
<script>
    var hellopreloader = document.getElementById("hellopreloader_preload");
    function fadeOutnojquery(el) {
        el.style.opacity = 1;
        var interhellopreloader = setInterval(function ()
        {
            el.style.opacity = el.style.opacity - 0.05; if (el.style.opacity <= 0.05)
        {
            clearInterval(interhellopreloader);
            hellopreloader.style.display = "none";
        }
        }, 16);
    } window.onload = function () { setTimeout(function () { fadeOutnojquery(hellopreloader); }, 1000); };
</script>
<!--header end-->
<header>
    <section>
        <a class="logo" href="/">
            <img src="/images/logo4.png" alt="logo">
        </a>
        <nav class="contact_nav">
            <input type="checkbox" id="menu" class=" ">
            <label for="menu" class="menu"></label>
            <ul class="menu_nav">
                <li class="nav_style call"><span>Զանգահարեք</span>+374 99 99 99</li>
                <li class="nav_style stock "><a href="#">Ակցիա</a></li>
                <li class="nav_style "><a href="/">Գլխավոր</a></li>
                <li class="nav_style "><a href="/offer">առաջարկներ</a></li>
                <li class="nav_style "><a href="/contact">Կոնտակտներ</a></li>
                <li class="menu_section ">
                    <label for="menu" class="close"></label>
                    <!--<a href="#" class="button">nav-triggerՀայտ</a>-->
                </li>
                <li class="clear"></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </section>
</header>
<main id="fullpage2" class="contact_main">
    <section id="" class="contact section section_show">
        <section class="Landing_page_section">
            <section class="section_body wrap">
                <h2>Կոնտակտներ</h2>
                <section class="article_body">
                    <article>
                        <img src="/images/Sprite_75.png" class="contact_icon" alt="" />
                        <h3>+347 99 999 999</h3>
                        <p class="mailito">info@drive.com</p>
                        <h4>ՀՀ Երևան Ճլթոյան 45</h4>
                        <a href="mailto:info@drive.am" class="button_call_me green">Հաղորդագրություն</a>
                    </article>
                </section>
            </section>
        </section>
    </section>

</main>
<footer>
    <section>
        <p class="long_text_block">
            © 2015 Drive
        </p>
    </section>
    <section>
        <script type="text/javascript">
            function show(state) {
                document.getElementById('popup_box').style.display = state;
                document.getElementById('popup').style.display = state;
            }
        </script>
        <div id="popup" class="popup" onclick="show('none')"></div>
        <div id="popup_box" class="popup_box">
            <div class="close" onclick="show('none')"></div>
            <div class="call_me_now">
                <div>
                    <input type="text" value="" name="client-number"
                           class="box" placeholder="Անուն" maxlength="18" size="18"/>
                    <input type="text" value="" name="client-number"
                           class="box" placeholder="Ազգանուն" maxlength="18" size="18"/>
                    <input type="tel" value="" name="client-number"
                           class="box" placeholder="( +___ ) ( __ )-___-___" maxlength="18" size="18"/>
                    <input type="submit" value="Սպասում եմ զանգին"  class="popup_button green green_btn" />
                </div>
                <div class="clear"></div>
                <p>Լրացրեք անհրաժեշտ տվյալները և ստացեք ՁԵՐ ԶԵՂՉԸ հենց հիմա<br />
                    <span class="attention attention_green">*</span>Ձեր կողմից մուտքագրվող տեղեկությունները պահվում են գաղտնի:</p>
                <div class="clear"></div>

            </div>
            <div class="clear"></div>
            <img class="logo" src="/images/logo_green.png" alt=""/>
        </div>
        <div class="back_call_block" onclick="show('block')">
            <a class="back_call green green_btn"></a>
            <!--end footer-->
            <div class="bord"></div>
        </div>
        <p class="register">Գրանցվել</p>
        <div class="clear"></div>

    </section>
</footer>
</body>
</html>
    @stop