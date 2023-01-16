<?php
include "config.php"
    ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contact</title>
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
                if (wn.outerWidth(true) < 480 && !window.location.href.includes("small=1")) {

                    if (!window.location.href.includes("small")) {
                        a_href = window.location.href.replace(/(small=)[^\&]+/, '$1' + '1');
                        if (a_href == window.location.href) {
                            if (a_href.includes("?")) {
                                a_href += '&small=1';
                            } else {
                                a_href += '?small=1';
                            }
                        }
                    } else {
                        a_href = window.location.href.replace("small=", "small=1");
                    }
                    window.location.href = a_href;
                }

                if (wn.outerWidth(true) > 760 && window.location.href.includes("small=1")) {
                    a_href = window.location.href.replace("small=1", "small=");
                    console.log(a_href)
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
            width: 400px;
        }

        .bloc_news {
            width: 520px;
            margin: 20px 0 0
        }

        .bloc_news img {
            float: left;
            border: 3px solid #c5c5c5;
            width: 118px;
            margin: 0 10px 0 37px
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
            margin: 0 0 0 40px
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

        .localisation-bloc a {
            display: inline-block;
            border: 2px solid #a3764a;

            width: 100%;
            height: 100%;
            margin: 10px 0;
            overflow: hidden;
            transition: opacity .3s ease-out;
        }

        .localisation-bloc img {
            width: 100%;
            height: auto;
        }

        .localisation-bloc a:hover {
            opacity: .7
        }
    </style>
    <meta name="viewport" content="width=device-width" />
    <?php
    if ($_SESSION["small"] == 1) {
    ?>
    <link rel="stylesheet" href="css/small.css" type="text/css" />
    <script type="text/javascript" src="js/mobile.js"></script>
    <?php
    } ?>
</head>

<body> <a style="float: left; margin: 10px 0 0 10px;" href="#" id="playbutton" data-lity class="fa-play">
        <img id="play" src="images/commun/play.png" width="28" height="26" alt="" />
    </a>
    <script src="js/openWeather.min.js"></script>
    <script type="text/javascript">
        var images = []
        for (i = 1; i <= 6; i++) {
            images.push({ image: "images/bg/contact/" + i + ".jpg" })
        }
        var gObjet = { transition_speed: 1800, performance: 0, slides: images };

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
            })
            $("body").queryLoader2({
                onComplete: function () {
                    $(".preloader").fadeOut(1e3);
                    setTimeout(
                        function () {
                            $("#supersized").css({ "filter": "grayscale(0%)" })
                            $(".show").css({ "filter": "grayscale(0%)" })

                        }
                        , 2000)
                }, barColor: "#000000", backgroundColor: "#000000", percentage: false, barHeight: 2, completeAnimation: "fade"
            })
        });


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
                    <li>
                        <?php if ($_SESSION["lang"] == "fr")
                            echo '<a href="https://reservations.verticalbooking.com/premium/index.html?id_albergo=13549&dc=3614&lingua_int=fra&id_stile=19825">'
                            ?>
                        <?php if ($_SESSION["lang"] == "en")
                            echo '<a href="https://reservations.verticalbooking.com/premium/index.html?id_albergo=13549&dc=3614&lingua_int=eng&id_stile=19825">'
                            ?>
                        <?php echo $lang["reservation"]; ?>
                        </a></li>
                    <li><a href="activites.php">
                            <?php echo $lang["activites"] ?>
                        </a></li>
                    <li><a href="galerieInterieur.php">
                            <?php echo $lang["galerie"] ?>
                        </a></li>
                    <li><a href="contact.php" class="selectedL">
                            <?php echo $lang["contact"] ?>
                        </a></li>
                </ul>
            </div>
            <div class="langue"><a href="?lang=fr">FR</a><span style="color:#7A7A7A;font-family:arial;font-size:12px;">
                    | </span> <a href="?lang=en">EN</a></div>
        </div>

        <div class="center">
            <div class="center_txt">
                <div class="block_txt_center" style="float:left;margin-left:650px; padding:30px 0 0 0;">
                    <div class="scroll-pane">
                        <p>
                            <iframe class="show"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13607.46820161369!2d-7.879285!3d31.500338!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x92ee15015cc436b5!2sRiad%20Al%20Mendili%20Private%20Resort%20%26%20Spa!5e0!3m2!1sen!2sfr!4v1671888395611!5m2!1sen!2sfr"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </p>
                        <br>
                        <div class="block_doc">

                            <h1>
                                <?php echo $lang["meteo"] ?>
                            </h1>
                            <div class="meteo_site weather-wrapper" style="">
                                <span class="weather-temperature"></span>
                                <span id="maxMeteo">Max:</span><span id="tempMeteoH"
                                    class="weather-max-temperature"></span>
                                <span id="minMeteo">Min:</span><span id="tempMeteoL"
                                    class="weather-min-temperaturee"></span>
                                <img src="" id="iconMeteo" class="weather-icon show" alt="Al Mendili" />
                            </div>
                        </div>

                        <div class="whats_up">
                            <?php echo $lang["contactClients"] ?>
                        </div>
                        <p class="localisation-bloc">
                            <a href="https://www.google.com/maps/place/31%C2%B039'56.6%22N+7%C2%B055'03.0%22W/@31.6656785,-7.9176593,17z/data=!4m5!3m4!1s0x0:0x0!8m2!3d31.6657333!4d-7.9175091?hl=fr"
                                target="_blank">
                                <img class="show" src="images/location/locationbg.png"
                                    srcset="images/location/locationbg.png" alt="localisation" />
                            </a>
                        </p>
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
    
    <audio style="display: none;" id="player" src="audio/background music.mp3" preload="auto" controls loop>
    </audio>

    <div id="responsive-menu" class="responsive-menu">
        <ul id="mobile-menu">
            <li>
                <?php echo $lang["presentation"] ?>
                <ul>
                    <li><a href="presentation.php">
                            <?php echo $lang["bienvenue"] ?>
                        </a></li>
                    <li><a href="localisation.php">
                            <?php echo $lang["localisation"] ?>
                        </a></li>
                    <li><a href="descriptif.php">
                            <?php echo $lang["descriptif"] ?>
                        </a></li>
                    <li><a href="prestation.php">
                            <?php echo $lang["prestation"] ?>
                        </a></li>
                </ul>
            </li>

            <li>
                <?php echo $lang["chambres"] ?>
                <ul>
                    <li><a href="deluxe.php">Chambres Deluxe</a></li>
                    <li><a href="junior.php">Suites Junior</a></li>
                    <li><a href="prestige.php">Suites Prestige</a></li>
                </ul>
            </li>

            <li><a href="spa.php">
                    <?php echo $lang["spa"] ?>
                </a></li>


            <li><a href="restauration.php">
                    <?php echo $lang["restauration"] ?>
                </a></li>
            <li><a href="tarifs.php">
                    <?php echo $lang["tarifs"] ?>
                </a></li>
            <li>
                <?php if ($_SESSION["lang"] == "fr")
                    echo '<a href="https://reservations.verticalbooking.com/premium/index.html?id_albergo=13549&dc=3614&lingua_int=fra&id_stile=19825">'
                    ?>
                <?php if ($_SESSION["lang"] == "en")
                    echo '<a href="https://reservations.verticalbooking.com/premium/index.html?id_albergo=13549&dc=3614&lingua_int=eng&id_stile=19825">'
                    ?>
                <?php echo $lang["reservation"]; ?>
                </a></li>


            <li>
                <a href="activites.php"><?php echo $lang["activites"] ?></a>

            </li>

            <li>
                <?php echo $lang["galerie"] ?>
                <ul>
                    <li><a href="galerieInterieur.php"><?php echo $lang["interieur"]; ?></a></li>
                    <li><a href="galerieExterieur.php"><?php echo $lang["exterieur"]; ?></a></li>
                    <li><a href="galerie360.php"><?php echo $lang["en360"]; ?></a></li>
                </ul>
            </li>


            <li><a href="contact.php">
                    <?php echo $lang["contact"] ?>
                </a></li>

        </ul>
        <div class="langue"><a href="index.php?lang=fr">FR</a><span
                style="color:#7A7A7A;font-family:arial;font-size:12px;"> | </span> <a href="index.php?lang=en">EN</a>
        </div>
    </div>
</body>

</html>