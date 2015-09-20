﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <title>Drive</title>
    <!--[if IE]>
    <script type="text/javascript">
        var console = { log: function() {} };
    </script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!--	    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>-->
    <script type="text/javascript" src="/js/jquery.fullPage.js"></script>
    <!--        <script type="text/javascript" src="jquery.onepage-scroll.js"></script>-->
    <!--	    <script type="text/javascript" src="js/examples.js"></script>-->
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/css/jquery.fullPage.css" />


    <style>
        body {
            overflow:hidden;
        }
        #hellopreloader_preload{
            display: block;
            position: fixed;
            z-index: 9999;
            width: 100%;
            height: 100%;
            background: #000;
        }
        .container {
            position: fixed;
            z-index: 99999;
            width: 150px;
            height:150px;
            top: 0;
            left: 0;
            right:0;
            bottom:0;
            margin:auto;
        }
        .circle {
            background-color: rgba(0,0,0,0);
            border: 5px solid rgba(139, 195, 74, .9);
            border-radius: 50%;
            box-shadow: 0 0 15px rgba(139, 195, 74, .9);
            border-top: 5px solid rgba(0,0,0,0);
            border-left: 5px solid rgba(0,0,0,0);
            margin: 0 auto;
        }
        .ball {
            opacity: .6;
            width: 110px;
            height:110px;
            animation: spin .5s infinite linear;
        }
        .ball1 {
            opacity: .9;
            width: 80px;
            height: 80px;
            position: relative;
            top: -105px;
            animation: spinoff .5s infinite linear;
        }
        .container p {
            font-size: 16px;
            position: absolute;
            color: #FFF;
            bottom: -40px;
            left: 18px;
            font-weight: bold;
            text-transform: uppercase;
            opacity:.7;
        }
        .stop:hover {
            animation-play-state:paused;
        }
        @keyframes spin {
            0% {transform:rotate(0deg); }
            100% {transform:rotate(360deg); }
        }
        @keyframes spinoff {
            0% { transform:rotate(0deg); }
            100% {transform:rotate(-360deg); }
        }
    </style>
    <script>
        $(document).ready(function () {
            $('#fullpage').fullpage({
                'verticalCentered': true,
                'css3': false,
                //'sectionsColor': ['#fff'],
                //'navigationPosition': 'right',
                'navigationTooltips': ['Մե՞նք', 'Առաջարկ', 'Երաշխիք', 'Միայն մենք', 'Կարծիքներ', 'Գրանցվել'],
                'easing': 'linear',
                'easingcss3': 'ease',
                //'anchors': ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
                'autoScrolling': true,
                'navigation': false,
                'fitToSection': true,
                //'resize': false,
                //'animateAnchor': false,
                //'scrollOverflow': true,
                'responsive': 768,
                //'menu': '#menu',
                //'continuousVertical': true,
                //'paddingTop': '20px',
            });
        });
    </script>

</head>
<body class="contact_page">
<div id="hellopreloader">
    <div id="hellopreloader_preload">
        <div class="container">
            <div class="circle ball stop"></div>
            <div class="circle ball1 stop"></div>
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
        <a class="logo" href="index.html">
            <img src="images/logo4.png" alt="logo">
        </a>
        <nav class="contact_nav">
            <input type="checkbox" id="menu" class=" ">
            <label for="menu" class="menu"></label>
            <ul class="menu_nav">
                <li class="nav_style call"><span>Զանգահարեք</span>+374 99 99 99</li>
                <li class="nav_style stock "><a href="#">Ակցիա</a></li>
                <li class="nav_style "><a href="index.html">Գլխավոր</a></li>
                <li class="nav_style "><a href="offer.html">առաջարկներ</a></li>
                <li class="nav_style "><a href="contact.html">Կոնտակտներ</a></li>
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
<main id="fullpage" class="contact_main">
    <section id="" class="contact section section_show">
        <section class="Landing_page_section">
            <section class="section_body wrap">
                <h2>Կոնտակտներ</h2>
                <section class="article_body">
                    <article>
                        <img src="images/Sprite_75.png" class="contact_icon" alt="" />
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
            <img class="logo" src="images/logo_green.png" alt=""/>
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