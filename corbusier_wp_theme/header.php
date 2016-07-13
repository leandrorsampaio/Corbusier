<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta http-equiv="Content-Type" content="text/html; <?php bloginfo('charset'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <title>Camila Lima Machado</title> 



        <!-- Styles -->
        <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/style/style.less" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600' rel='stylesheet' type='text/css'>

        <!-- Libs -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"><!-- Font Awesome -->
        <link href="<?php bloginfo('template_url'); ?>/lib/bootstrap.min.css" rel="stylesheet">
        <script src="<?php bloginfo('template_url'); ?>/lib/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script><!-- JQuery -->
        <script src="<?php bloginfo('template_url'); ?>/lib/less.js" type="text/javascript"></script>




        <!-- Icons -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/images/icons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/images/icons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/icons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/images/icons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/icons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/images/icons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/images/icons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/images/icons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/images/icons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/images/icons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/images/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/images/icons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/images/icons/favicon-16x16.png">
        <link rel="manifest" href="<?php bloginfo('template_url'); ?>/images/icons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/images/icons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/icons/favicon.ico">



        <!--[if lt IE 9]>
          <script src="<?php bloginfo('template_url'); ?>/lib/html5shiv.js"></script>
        <![endif]-->
        <!--[if lt IE 7]>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
        <![endif]-->



        <script>
            // Smooth Scroll
            $(function () {
                $('a[href*="#"]:not([href="#"])').click(function () {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
        </script>




        <?php
        if (is_home()) {
            ?>
            <script>
                // Show Menu
                jQuery(function ($) {
                    var $nav = $('.menuBall');
                    var $win = $(window);
                    var winH = $win.height() - 50; // Get the window height.
                    $win.on("scroll", function () {
                        if ($(this).scrollTop() > winH) {
                            $nav.addClass("menuBall-ON");
                        } else {
                            $nav.removeClass("menuBall-ON");
                        }
                    }).on("resize", function () { // If the user resizes the window
                        winH = $(this).height(); // you'll need the new height value
                    });
                });
            </script>
            <?php
        }
        ?>





        <?php wp_head(); ?>
    </head><!--/head-->




    <?php
    if (is_home()) {
        ?>
        <script>
            window.addEventListener("resize", myFunction);
            function myFunction() {
                var alturaMede = $(window).height() + "px";
                document.getElementById('indexHeader').style.height = alturaMede;
            }
        </script>
        <?php
    }
    ?>
    <body class="bgDegrade" onload="myFunction()">
