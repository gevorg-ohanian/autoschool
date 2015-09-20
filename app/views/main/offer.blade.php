@extends('template.template')
@section('content')

<body class="contact_page offer_page">
<div id="hellopreloader">
    <div id="hellopreloader_preload">
        <div class="container">
            <div class="circle-offer ball stop"></div>
            <div class="circle-offer ball1 stop"></div>
            <p>Բեռնվում է...</p>
        </div>
    </div>
</div>
<script>
    var hellopreloader = document.getElementById("hellopreloader_preload");
    function fadeOutnojquery(el) {
        el.style.opacity = 1;
        var interhellopreloader = setInterval(function () {
            el.style.opacity = el.style.opacity - 0.05; if (el.style.opacity <= 0.05) {
                clearInterval(interhellopreloader);
                hellopreloader.style.display = "none";
            }
        }, 16);
    } window.onload = function () { setTimeout(function () { fadeOutnojquery(hellopreloader); }, 1000); };
</script>
<header>
    <section>
        <a class="logo" href="/">
            <img src="/images/logo5.png" alt="logo">
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
<main id="fullpage3" class="offer_main">
    <section id="" class="offer_page section section_show">
        <section class="offer_section">
            <section class="offer_section_body wrap">
                <section class="offer_article_body">
                    <article class="offer_art offer_art_1">
                        <h2>Մեր ծառայության մասին</h2>
                        <div class="offer_art_block">
                            <div class="user">
                                <img src="/images/ava.jpg"/>
                            </div>
                            <p>
                                Վարել վստա՞հ: Մենք կապահովենք: Սովորեք վարել Drive-ով:
                                Մենք հոգնել ենք մակերեսային գիտելիքներից և վատ վարորդներից: Իսկ Դու՞ք:
                                Օգնեք մեզ շտկել երթևեկությունը:
                            </p>
                            <div class="clear"></div>
                        </div>
                    </article>
                    <article class="offer_art offer_art_2">
                        <h2>Մեր ծառայության մասին</h2>
                        <div class="offer_art_block">
                            <div class="user">
                                <img src="/images/ava.jpg"/>
                            </div>
                            <p>
                                Վարել վստա՞հ: Մենք կապահովենք: Սովորեք վարել Drive-ով:
                                Մենք հոգնել ենք մակերեսային գիտելիքներից և վատ վարորդներից: Իսկ Դու՞ք:
                                Օգնեք մեզ շտկել երթևեկությունը:
                            </p>
                            <div class="clear"></div>
                        </div>
                    </article>
                    <article class="offer_art offer_art_1">
                        <h2>Մեր ծառայության մասին</h2>
                        <div class="offer_art_block">
                            <div class="user1">
                                <img src="/images/ava.jpg"/>
                            </div>
                            <p>
                                Վարել վստա՞հ: Մենք կապահովենք: Սովորեք վարել Drive-ով:
                                Մենք հոգնել ենք մակերեսային գիտելիքներից և վատ վարորդներից: Իսկ Դու՞ք:
                                Օգնեք մեզ շտկել երթևեկությունը:
                            </p>
                            <div class="clear"></div>
                        </div>
                    </article>
                    <article class="offer_art offer_art_1">
                        <p>
                            Ուզում եք տեսական գիտելիքներ Drive:
                            Տարբերեք նշանները...???
                            Մեքենայի կառուցվածքի մասին...???

                            Կարծում ենք միասին ուրախ է, բայց Դուք կարող եք ունենալ այլ կարծիք:
                            Մենք ունենք նաև անհատական դասընթացներ:

                            Հաճելի է երբեմն կյանք փրկել:
                            Ստացեք նաև առաջին օգնության գործնական դասեր Հայկական կարմիր խաչի մասնագետների կողմից:

                            Վստահ չեք վարում (Վարել չգիտե՞ք): Գործնական Drive:
                            Վարելը պետք է հաճույք պատճառի:
                            Պատճառեք պետավտոտեսուչին կոգնիտիվ դիսոնանս (մանթո):
                            Ցանկությունը Ձերն է մնացածը կապահովենք Մենք:

                            Մեխանիկական և ավտոմատ փոխանցումատուփով մեքենաներ:
                            Ընտրեք ինքներդ:

                            Հետուսումնական աջակցություն... ???
                            Իսկ Դուք տեսե՞լ եք շփոթված պետավտոտեսուչ:
                            Քննությանը Ձեր վարորդ-ինստրուկտորի ներկայությունը կապահովի դա:
                            Նշում ենք վարորդական իրավունքի ձեռք բերումը շամպայնով: ???
                        </p>
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
            <div class="bord"></div>
        </div>
        <p class="register">Գրանցվել</p>
        <div class="clear"></div>
    </section>
</footer>
</body>
</html>
@stop