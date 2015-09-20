<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Drive</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/css/jquery.fullPage.css" />

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

