<?php
include "config.php"
    ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Activités</title>
    <meta name="description"
        content="Riad Al Mendili Private Resort & SPA est une propriété de luxe. Catherine et Alain vous accueillent, vous êtes chez vous dans le calme et la sérénité de leur Riad." />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript">
        var isMobile = false;
        $(function () {
            var resizeTimer, wn = $(window);
            var resize = function () {
                if (!isMobile && wn.outerWidth(true) < 480) {
                    a_href = window.location.href.repliace(/(small=)[^\&]+/, '$1' + '1');
                    if (a_href == window.location.href)
                        a_href += '?small=1';

                    window.location.href = a_href;
                }

                if (isMobile && wn.outerWidth(true) > 760) {
                    a_href = window.location.href.replace(/(small=)[^\&]+/, '$1' + '');
                    if (a_href == window.location.href)
                        a_href += '?small=';

                    window.location.href = a_href;
                }
            };

            wn.bind('resize', function () {
                if (resizeTimer)
                    clearTimeout(resizeTimer);
                resizeTimer = setTimeout(resize, 600);
            }).resize();
        });
    </script>
    <link rel="stylesheet" href="theme/supersized.shutter.css" type="text/css" />
    <script type="text/javascript" src="js/supersized.3.2.6.min.js"></script>
    <script type="text/javascript" src="theme/supersized.shutter.min.js"></script>
    <script type="text/javascript" src="js/jquery.queryloader2.js"></script>
    <!--[if lt IE 7]>
    <script type="text/javascript" src="/unitpngfix.js"></script>
<![endif]-->
    <script type="text/javascript" src="js/jquery.effects.js"></script>
    <style>
        .whats_up {
            width: 520px;
            float: left
        }

        .bloc_news {
            width: 900px;
            margin: 20px 0 0
        }

        .bloc_news img {
            float: left;
            border: 3px solid #c5c5c5;
            width: 200px;
            margin: 10px 10px 0 37px
        }

        .bloc_news h3 {
            color: #936b47;
            font-size: 13px;
            font-family: Georgia, "Times New Roman", Times, serif;
            margin: 7px 0 2px 7px
        }

        .bloc_news p {
            margin: 0
        }

        .block_doc {
            width: 200px;
            float: right;
            margin: 0 0 0 70px
        }

        .meteo {
            font-family: Georgia, "Times New Roman", Times, serif;
            color: #fff;
            font-size: 24px;
            margin: 0 0 20px
        }

        .meteo span {
            color: #936b47;
            font-size: 14px
        }

        .block_txt_center .block_doc h1 {
            width: 180px;
            color: #936b47;
            font-size: 18px;
            border-bottom: 1px dotted #4e4e4e;
            margin: 0;
            padding: 0 0 20px
        }

        .block_txt_center .block_doc ul {
            width: 180px;
            margin: 0
        }

        .block_txt_center .block_doc ul li {
            width: 180px;
            list-style: none;
            margin: 0
        }

        .block_txt_center .block_doc ul li a {
            display: block;
            border-bottom: 1px dotted #4e4e4e;
            width: 180px;
            color: #fff;
            padding: 3px 0
        }

        .block_txt_center .conditions {
            border-top: 1px dotted #4e4e4e;
            width: 742px;
            margin: 40px 0 0 37px
        }

        .block_txt_center .conditions h1 {
            width: 580px;
            color: #936b47;
            font-size: 18px;
            margin: 20px 0 10px
        }

        .block_txt_center .conditions ul {
            width: 640px;
            list-style: none;
            margin: 0
        }

        .block_txt_center .conditions ul li {
            width: 640px;
            margin: 0 0 4px 15px
        }

        .meteo_site {
            width: 169px;
            height: 66px;
            position: relative;
            margin: 0 0 10px;
            padding: 0
        }

        .meteo_site #maxMeteo {
            display: block;
            color: #9F9F9F;
            font-size: 12px;
            position: absolute;
            left: 0;
            top: 7px;
            font-family: "Justus Italic"
        }

        .meteo_site #minMeteo {
            display: block;
            color: #9F9F9F;
            font-size: 12px;
            position: absolute;
            left: 0;
            top: 41px;
            font-family: "Justus Italic"
        }

        .meteo_site #tempMeteoH {
            display: block;
            font-family: "Justus Italic";
            font-size: 22px;
            color: #FFF;
            position: absolute;
            left: 36px;
            top: 4px;
            width: 44px
        }

        .meteo_site #tempMeteoL {
            display: block;
            font-family: "Justus Italic";
            font-size: 22px;
            color: #FFF;
            position: absolute;
            left: 36px;
            top: 38px;
            width: 44px
        }

        .meteo_site #iconMeteo {
            display: block;
            color: #9F9F9F;
            font-size: 12px;
            position: absolute;
            left: 91px;
            top: 0;
            width: 60px;
            height: 60px
        }
    </style>
</head>

<body> <a style="float: left; margin: 10px 0 0 10px;" href="#" id="playbutton" data-lity class="fa-play">
        <img id="play" src="images/commun/play.png" width="28" height="26" alt="" />
    </a>
    <script src="js/openWeather.min.js"></script>
    <script type="text/javascript">

        var gObjet = { slide_interval: 2800, transition: 1, transition_speed: 1800, stop_loop: 1, keyboard_nav: 0, thumb_links: 1, performance: 0, slide_links: false, slides: [{ image: "images/bg/activite.jpg" }, { image: "images/bg/activite.jpg" }] };

        if (!isMobile)
            jQuery(function (a) { a.supersized(gObjet); });

        $(document).ready(function () {

            $("#playbutton").click(function () {
                if ($(this).hasClass('fa-play')) {
                    $(this).removeClass('fa-play');
                    $(this).addClass('fa-pause');
                    document.getElementById('player').play()
                    $("#play").attr("src", "images/commun/pause.png");


                }
                else {
                    $(this).removeClass('fa-pause');
                    $(this).addClass('fa-play');
                    document.getElementById('player').pause()
                    $("#play").attr("src", "images/commun/play.png");


                }
            }) $("body").queryLoader2({ onComplete: function () { $(".preloader").fadeOut(1e3) }, barColor: "#000000", backgroundColor: "#000000", percentage: false, barHeight: 2, completeAnimation: "fade" }) });


        $(function () {

            $('.weather-temperature').openWeather({
                key: 'c9d49310f8023ee2617a7634de23c2aa',
                lang: 'fr',
                city: 'Marrakech',
                placeTarget: '.weather-place',
                units: 'c',
                maxTemperatureTarget: '.weather-max-temperature',
                minTemperatureTarget: '.weather-min-temperaturee',
                iconTarget: '.weather-icon',
                success: function () {
                    $('.weather-temperature').show();
                },
                error: function (message) {
                    console.log(message);
                }
            });

        });

    </script>
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <div class="preloader"></div>
    <div class="home">
        <div class="header">
            <div class="div_logo"><a href="index.php" class="logo">&nbsp;</a></div>
            <div class="filet"></div>
            <div class="menu">
                <ul>
                    <li><a href="presentation.php">
                            <?php echo $lang["presentation"] ?>
                        </a></li>
                    <li><a href="deluxe.php">
                            <?php echo $lang["chambres"] ?>
                        </a></li>
                    <li><a href="spa.php">
                            <?php echo $lang["spa"] ?>
                        </a></li>
                    <li><a href="restauration.php">
                            <?php echo $lang["restauration"] ?>
                        </a></li>
                    <li><a href="tarifs.php">
                            <?php echo $lang["tarifs"] ?>
                        </a></li>
                    <li><a href="https://reservations.verticalbooking.com/premium/index.html?id_albergo=13549&dc=3614&lingua_int=fra&id_stile=19825">
                            <?php echo $lang["reservation"] ?>
                        </a></li>
                    <li><a href="activites.php" class="selectedL">
                            <?php echo $lang["activites"] ?>
                        </a></li>
                    <li><a href="galerieInterieur.php">
                            <?php echo $lang["galerie"] ?>
                        </a></li>
                    <li><a href="contact.php">
                            <?php echo $lang["contact"] ?>
                        </a></li>
                </ul>
            </div>
            <div class="langue"><a href="?lang=fr">FR</a><span style="color:#7A7A7A;font-family:arial;font-size:12px;">
                    | </span> <a href="?lang=en">EN</a></div>
        </div>

        <div class="center">
            <div class="center_txt">
                <div class="block_txt_center" style="float:left; width:650px; padding:30px 0 0 0; margin-left:70px">
                    <div class="scroll-pane" style="width:650px;">
                        <div>
                            <div class="bloc_news">
                                <img src="images/blog/festival.jpg" />
                                <div style="float:left; width:600px;">
                                    <h3>Le Festival International du Film de Marrakech</h3>
                                    <p style=" margin:0;"> Le Festival International du Film de Marrakech a pour objet,
                                        dans la tradition d’initiative et d’ouverture du Maroc, et s’agissant de
                                        création cinématographique, d’être un lieu d’expression et de découverte en
                                        relevant très haut le pari de la diversité, de l’échange, de la confrontation
                                        positive et de l’enrichissement. Cette année et pour sa quatorzième édition, […]
                                    </p>
                                </div>
                                <br class="clr" />
                            </div>
                            <div class="bloc_news">
                                <img src="images/blog/halloween.jpg" />
                                <div style="float:left; width:349px;">
                                    <h3>Halloween débarque à Marrakech …</h3>
                                    <p style=" margin:0;">Voilà que sonne l’heure de la célébration à laquelle
                                        pratiquement tous les anglo-saxons (et même les francophones d’aujourd’hui)
                                        s’adonne avec beaucoup de plaisir et d’originalité. Il s’agit de la fête qu’on
                                        célèbre le soir du 31 octobre de chaque année, c’est-à-dire la « veille de la
                                        Toussaint ». Fête d’origine païenne qui remonte à l’histoire […] </p>
                                </div>
                                <br class="clr" />
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="footer">
        <div class="txt_footer">
            <?php echo $lang["droits"] ?>
        </div>
    </div>
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36951903-1']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
 <audio style="display: none;" id="player" src="audio/background music.mp3" preload="auto" controls
                    loop>
                </audio> </body>

</html>