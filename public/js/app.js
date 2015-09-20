$(document).ready(function () {
    var $tooltip = ['?????', '???????', '???????', '????? ????', '?????????', '????????'];
    var $main = $('main').attr('id');

    if($main==='fullpage1'){
        $('main').fullpage({
                'verticalCentered': true,
                'navigationTooltips': $tooltip,
                'autoScrolling': true,
                'navigation': true,
                'fitToSection': true,
                'responsive': 768
        });
    }
    else if($main==='fullpage2'){
        $('main').fullpage({

                'verticalCentered': true,
                'navigationTooltips': $tooltip,
                'easing': 'linear',
                'easingcss3': 'ease',
                'autoScrolling': true,
                'navigation': false,
                'fitToSection': true,
                'responsive': 768
        });
    }

    else if($main==='fullpage3'){
        $('main').fullpage({
                'verticalCentered': true,
                'autoScrolling': false,
                'navigation': false,
                'fitToSection': false,
                'resize': true,
                'animateAnchor': false,
                'scrollOverflow': false,
                'responsive': 768,
                'menu': '#menu',
                'continuousVertical': false,
                'paddingTop': '20px'
        });
    }
});
