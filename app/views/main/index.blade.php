﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
        <!--                 overflow:hidden;
        -->            }
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
            border: 5px solid rgba(44, 158, 225, .9);
            border-radius: 50%;
            box-shadow: 0 0 15px rgba(44, 158, 225, .9);
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
                //'css3': false,
                //'sectionsColor': ['#fff'],
                //'navigationPosition': 'right',
                'navigationTooltips': ['Մե՞նք', 'Առաջարկ', 'Երաշխիք', 'Միայն մենք', 'Կարծիքներ', 'Գրանցվել'],
                //'easing': 'linear',
                //'easingcss3': 'ease-in',
                //'anchors': ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
                'autoScrolling': true,
                'navigation': true,
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
<body>
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
<header id="header" class="header">
    <section>
        <a class="logo" href="index.html">
            <img class="logo1" src="images/logo1.png" alt="logo">
            <img class="logo2" src="images/logo2.png" alt="logo">
            <img class="logo3" src="images/logo3.png" alt="logo">
            <img class="logo4" src="images/logo4.png" alt="logo">
            <img class="logo5" src="images/logo5.png" alt="logo">
            <img class="logo6" src="images/logo6.png" alt="logo">
        </a>
        <nav>
            <input type="checkbox" id="menu" class=" ">
            <label for="menu" class="menu"></label>
            <ul class="menu_nav">
                <li class="nav_style call"><span>Զանգահարեք</span>+374 99 99 99</li>
                <li class="nav_style stock "><a href="#">Ակցիա</a></li>
                <li class="nav_style "><a href="index.html">Գլխավոր</a></li>
                <li class="nav_style "><a href="/offer">առաջարկներ</a></li>
                <li class="nav_style "><a href="contact.html">կոնտակտներ</a></li>
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
<main id="fullpage">

    <section id="section0" class="section ">
        <section class="Landing_page_section">
            <section class="section_body wrap">
                <h2>Ցանկանում եք դառնալ վարո՞րդ</h2>
                <!--                                            <img class="arrows arrowR"src="images/Sprite_04_2.png" alt="" />-->
                <section class="article_body1">
                    <article class="art_1">
                        <img class="article_icon" src="images/Sprite_01.png" alt=""/>
                        <p class="article_text long_text_block">
                        <ul class="text_point_block">
                            <li class="text_point">Հոգնե՞լ եք հանրային տրանսպորտից</li>
                            <li class="text_point">Ուզում եք լինել ազա՞տ</li>
                            <li class="text_point">Ուզում եք երթևեկել մեքենայո՞վ</li>
                        </ul>
                        </p>
                    </article>
                    <article class="call_me">
                        <img class="article_icon" src="/images/Sprite_51.png" alt="" />
                        <p class="article_text long_text_block">
                            Մեր մասնագետները կուղղորդեն Ձեզ ամենա «Դրայվային» ու ամենաճիշտ ճանապարհով...
                        </p>

                        <a href="#" onclick="show('block')" class="button_call_me" title="                                                    Կայքով գրանցվելու դեպքում կստանաք 30% զեղչ տեսական դասերի համար
    ">Ստանալ զեղչ</a>

                        <span>Մենք կօգնենք Ձեզ ստանալ <span>վարորդական իրավունք</span></span>

                    </article>
                    <article class="art_2">
                        <img class="article_icon third" src="/images/Sprite_30.png" alt="" />
                        <p class="article_text long_text_block">
                        <ul class="text_point_block">
                            <li class="text_point">Պրոֆեսիոնալ մասնագետներ</li>
                            <li class="text_point">Բարձրակարգ մեքենաներ</li>
                            <li class="text_point">Ճկուն գրաֆիկ</li>
                        </ul>
                        </p>
                    </article>
                    <div class="scrol">
                        <span></span>
                        <span></span>
                        <p class="scrol_text">Պտտեք «scrol»-ը</p>
                    </div>
                    <div class="clear"></div>
                </section>
                <!--                                            <img class="arrows arrowL" src="images/Sprite_04.png" alt="" />-->
            </section>
        </section>
    </section>
    <section id="section1" class="section section_show ">
        <section class="Landing_page_section">
            <section class="section_body wrap">
                <h2 class="">Մենք առաջարկում ենք</h2>
                <section  class="article_body">
                    <article>
                        <img class="article_icon" src="images/Sprite_33.png" alt="">
                        <h3>Տեսական><br/> դասընթացներ</h3>
                        <p class="article_text">
                            Եվ անհատական, և խմբակային ուսուցում
                            Փորձառու մասնագետ դասախոսներ
                        </p>
                    </article>
                    <article>
                        <img class="article_icon" src="images/Sprite_39.png" alt="" />
                        <h3>գործնական<br /> դասընթացներ</h3>
                        <p class="article_text">
                            Եվ ավտոմատ, և մեխանիկական փոխանցումատուփով բարձրակարգ մեքենաներ
                            Պրոֆեսիոնալ վարորդ-ինստրուկտորներ
                        </p>
                    </article>
                    <article>
                        <img class="article_icon" src="images/Sprite_42.png" alt="" />
                        <h3>հետուսումնական<br /> աջակցություն</h3>
                        <p class="article_text">
                            Վարորդ-ինստրուկտորի ներկայությունը գործնական քննության ժամանակ, ինչը կբացառի կողմնակի բացասական գործոնների ազդեցությունը                                                </p>
                    </article>
                    <div class="clear"></div>
                </section>
                <a href="#"  class="button_call_me orange-btn">Առաջարկներ</a>
            </section>
        </section>
    </section>
    <section id="section2" class="section section_show">
        <section class="Landing_page_section">
            <section class="section_body wrap">
                <h2>Մենք Երաշխավորում ենք</h2>
                <section  class="article_body">
                    <article>
                        <img class="article_icon" src="images/Sprite_36.png" alt="" />
                        <h3>պրոֆեսիոնալ<br />   ուսուցում</h3>

                    </article>
                    <article>
                        <img class="article_icon" src="images/Sprite_27.png" alt="" />
                        <h3>ԱՆՎՏԱՆԳ ԵՎ ՎՍՏԱՀ ՎԱՐՄԱՆ ՀՄՏՈՒԹՅՈՒՆՆԵՐ</h3>
                    </article>
                    <article>
                        <img class="article_icon" src="images/Sprite_07.png" alt="" />
                        <h3>Քննությունների հանձնման բարձր ցուցանիշ</h3>
                    </article>
                    <div class="clear"></div>
                </section>
                <a href="#"  class="button_call_me red-btn">Առաջարկներ</a>
            </section>
        </section>
    </section>
    <section id="section3" class="section section_show">
        <section class="Landing_page_section">
            <section class="section_body wrap">
                <h2>Միայն մեզ մոտ</h2>
                <section class="article_body">
                    <article>
                        <div class="discount_box">
                            <img class="article_icon" src="images/Sprite_10.png" alt="" />
                            <span class="discount"><span>-30%</span>զեղչ</span>
                            <div class="clear"></div>
                        </div>
                        <h3>ԵթԵ Գրանցվեք <br /> կայքից հենց հիմա</h3>
                        <!--                                                <p class="article_text">
                                                                             տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է:
                                                                        </p>-->
                    </article>
                    <article>
                        <img class="article_icon" src="images/Sprite_12.png" alt="" />
                        <h3>Ապառիկ <br />ՁԵՎԱԿԵՐՊՈՒՄ</h3>
                        <!--                                                <p class="article_text">
                                                                             տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է:
                                                                        </p>-->
                    </article>
                    <article>
                        <img class="article_icon" src="images/Sprite_15_green.png" alt="" />
                        <h3>ԲՈՆՈւսային <br /> փաթեթՆեր</h3>
                        <!--                                                <p class="article_text">
                                                                             տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է:
                                                                        </p>-->
                    </article>
                    <div class="clear"></div>
                </section>
                <a href="#"  class="button_call_me green-btn">Առաջարկներ</a>
            </section>
        </section>
    </section>
    <section id="section4" class="section section_show">
        <section class="Landing_page_section">
            <section class="section_body wrap">
                <h2>կարծիքներ Մեր մասին </h2>
                <section class="article_body">
                    <article>
                        <div class="user">
                            <img class="user_img user1" src="images/user/1.jpg" alt="" />
                            <div class="Classification">B, C</div>
                        </div>
                        <h3>ԱՆՈւՆ ԱԶԳԱՆՈւՆ</h3>
                        <p class="article_text">
                            տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է:
                        </p>
                    </article>
                    <article>
                        <div class="user">
                            <img class="user_img user2" src="images/user/2.jpg" alt="" />
                            <div class="Classification">B, C</div>
                        </div>
                        <img class="lines line1"src="images/Sprite_73.png" alt="" />
                        <img class="lines line2"src="images/Sprite_73.png" alt="" />
                        <h3>ԱՆՈւՆ ԱԶԳԱՆՈւՆ</h3>
                        <p class="article_text">
                            տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է:
                        </p>
                    </article>
                    <article>
                        <div class="user">
                            <img class="user_img user3" src="images/user/3.jpg" alt="" />
                            <div class="Classification">B, C</div>
                        </div>
                        <h3>ԱՆՈւՆ ԱԶԳԱՆՈւՆ</h3>
                        <p class="article_text">
                            տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է:
                        </p>
                    </article>
                    <div class="clear"></div>
                </section>
                <a href="#"  class="button_call_me yellow-btn">Առաջարկներ</a>
            </section>
        </section>
    </section>
    <section id="section5" class="section section_show">
        <section class="Landing_page_section">
            <section class="section_body wrap">
                <h2>Հրավիրում ենք ավտոուսուցման դասընթացների</h2>
                <section class="article_body">
                    <article>
                        <input class="box purple-box" type="text" placeholder="Անուն"/>
                        <input class="box purple-box" type="text" placeholder="Ազգանուն"/>
                        <input class="box purple-box" type="tel" placeholder="Հեռախոսահամար"/>
                        <p class="article_text">
                            Լրացրեք անհրաժեշտ տվյալները և ստացեք ՁԵՐ ԶԵՂՉԸ հենց հիմա<br />
                            <span class="attention">*</span>Ձեր կողմից մուտքագրվող տեղեկությունները պահվում են գաղտնի:
                        </p>
                        <a href="#" class="button_call_me purple-btn">Ստանալ զեղչը</a>
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
            //Функция показа
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
                    <input type="submit" value="Սպասում եմ զանգին"  class="popup_button" />
                    <div class="clear"></div>
                </div>
                <p>Լրացրեք անհրաժեշտ տվյալները և ստացեք ՁԵՐ ԶԵՂՉԸ հենց հիմա<br />
                    <span class="attention">*</span>Ձեր կողմից մուտքագրվող տեղեկությունները պահվում են գաղտնի:</p>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <img class="logo logo1" src="images/logo1.png" alt=""/>
            <img class="logo logo2" src="images/logo2.png" alt=""/>
            <img class="logo logo3" src="images/logo3.png" alt=""/>
            <img class="logo logo4" src="images/logo4.png" alt=""/>
            <img class="logo logo5" src="images/logo5.png" alt=""/>
            <img class="logo logo6" src="images/logo6.png" alt=""/>
        </div>
        <div class="back_call_block" onclick="show('block')">
            <a class="back_call"></a>
            <div class="bord"></div>
        </div>
        <p class="register">Գրանցվել</p>
        <div class="clear"></div>
    </section>
</footer>
</body>
</html>