<?php
include "config.php"
    ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Acceuil</title>
    <meta name="description"
        content="Riad Al Mendili Private Resort & SPA est une propriété de luxe. Catherine et Alain vous accueillent, vous êtes chez vous dans le calme et la sérénité de leur Riad." />
    <link rel="shortcut icon" href="./favicon.ico" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui.structure.min.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui.theme.min.css" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="css/singleimagepopup.min.css" />


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
    <meta name="viewport" content="width=device-width" />
    <?php
    if ($_SESSION["small"] == 1) {
        ?>
        <link rel="stylesheet" href="css/small.css" type="text/css" />
        <script type="text/javascript" src="js/mobile.js"></script>
        <?php
    } ?>

    <style>
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

        #mask {
            position: absolute;
            left: 0;
            top: 0;
            z-index: 9000;
            background-color: #26262c;
            display: none;
        }

        #boxes .window {
            position: absolute;
            left: 0;
            top: 0;
            width: 440px;
            height: 850px;
            display: none;
            z-index: 9999;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        #boxes #dialog {
            width: 450px;
            height: auto;
            padding: 10px 10px 10px 10px;
            font-size: 15pt;
        }

        .agree:hover {
            background-color: #D1D1D1;
        }

        .popupoption:hover {
            background-color: #D1D1D1;
            color: green;
        }

        .popupoption2:hover {
            color: red;
        }
    </style>
    </style>



    <script type="text/javascript">
        var images = []
        for (i = 1; i <= 5; i++) {
            images.push({ image: "images/bg/acceuil/" + i + ".jpg" })
        }
        var gObjet = { transition_speed: 1800, performance: 0, slides: images };

        if (!isMobile)
            jQuery(function (a) { a.supersized(gObjet); });

        $(document).ready(function () {
            var w = $(window).width();
            var h = $(window).height();


            $("#playbutton").click(function () {
                if ($(this).hasClass('fa-play')) {
                    $(this).removeClass('fa-play');
                    $(this).addClass('fa-pause');
                    document.getElementById('player').play()
                }
                else {
                    $(this).removeClass('fa-pause');
                    $(this).addClass('fa-play');
                    document.getElementById('player').pause()


                }
            })
            $("body").queryLoader2({
                onComplete: function () {
                    $(".preloader").fadeOut(1e3);
                    setTimeout(
                        function () {
                            $("#supersized").css({ "filter": "grayscale(0%)" })


                        }
                        , 2000)
                },
                barColor: "#efefef",
                backgroundColor: "#111",
                percentage: true,
                barHeight: 1,
                minimumTime: 2000,
                fadeOutTime: 1000
            });


            if (!isMobile) {
                var a = "0";
                $("#prevslide").click(function () {
                    if (a == "0") {
                        $(".block_txt_center").hide("clip", { direction: "left" }, 1e3);
                        setTimeout('$(".block_txt_center").remove()', 1e3); a = "1"
                    }
                });
                $("#nextslide").click(function () {
                    if (a == "0") {
                        $(".block_txt_center").hide("clip", { direction: "left" }, 1e3);
                        setTimeout('$(".block_txt_center").remove()', 1e3); a = "1"
                    }
                });

                setTimeout('$(".slide-0 a img").attr("src", "images/bg/acceuil/1.jpg")', 7800);
            }
        });
    </script>

    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <style>
        #play {
            animation: shake 2s;
            animation-iteration-count: infinite;
        }

        @keyframes shake {
            0% {
                transform: translateX(0)
            }

            25% {
                transform: translateX(5px)
            }

            50% {
                transform: translateX(-5px)
            }

            75% {
                transform: translateX(5px)
            }

            100% {
                transform: translateX(0)
            }
        }
    </style>
    <style>
        #play {
            animation: shake 2s;
            animation-iteration-count: infinite;
        }

        @keyframes shake {
            0% {
                transform: translateX(0)
            }

            25% {
                transform: translateX(5px)
            }

            50% {
                transform: translateX(-5px)
            }

            75% {
                transform: translateX(5px)
            }

            100% {
                transform: translateX(0)
            }
        }
    </style>
</head>

<body>
    <div id="singleimagepopup"></div>
    <a style="float: left; margin: 10px 0 0 10px;" href="#" id="playbutton" data-lity class="fa-play">
        <img id="play" src="images/commun/music.png" width="28" height="26" alt="" />
    </a>
    <div class="preloader"></div>
    <a id="prevslide" class="load-item"></a>
    <a id="nextslide" class="load-item"></a>
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
                            echo '<a target="_blank" href="https://reservations.verticalbooking.com/premium/index.html?id_albergo=13549&dc=3614&lingua_int=fra&id_stile=19825">'
                                ?>
                        <?php if ($_SESSION["lang"] == "en")
                            echo '<a target="_blank" href="https://reservations.verticalbooking.com/premium/index.html?id_albergo=13549&dc=3614&lingua_int=eng&id_stile=19825">'
                                ?>
                        <?php echo $lang["reservation"]; ?>
                        </a>
                    </li>
                    <li><a href="activites.php">
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
    </div>
    <style>
        #watermark {
            position: fixed;
            bottom: 50px;
            right: 5px;
            z-index: 99;
            color: white;
        }

        .zoom {

            /* Animation */
            width: 40px;
            height: 38px;
            margin: 0 auto;
        }

        .zoom:hover {
            transform: scale(1.5);
            /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
    </style>

    <div id="watermark">
        <table style="border-collapse: collapse;margin-left: 20px;">
            <tr>
                <td style="border: none;">
                    <a style="float: left; margin: 10px 0 0 10px;" target="_blank"
                        href="https://www.instagram.com/riad_al_mendili/" data-lity class="fa-play">
                        <img src="images/commun/instagram.png" width="40" height="38" class="zoom" alt="" />
                    </a>
                </td>
                <td style="border: none;">
                    <a style="float: left; margin: 10px 0 0 10px;" target="_blank"
                        href="https://api.whatsapp.com/send?phone=+212600010010&text=Do%20you%20have%20a%20question?"
                        data-lity class="fa-play">
                        <img src="images/commun/whatsapp.png" width="40" height="38" class="zoom" alt="" />
                    </a>
                </td>

                <td style="border: none;">
                    <a target="_blank" style="float: left; margin: 10px 0 0 10px;"
                        href="https://www.tripadvisor.com/Hotel_Review-g293734-d1175499-Reviews-Riad_Al_Mendili_Kasbah-Marrakech_Marrakech_Safi.html"
                        data-lity class="fa-play">
                        <img src="images/commun/tripadvisor.png" width="40" height="38" class="zoom" alt="" />
                    </a>
                </td>

                <td style="border: none;">
                    <audio style="display: none;" id="player" src="audio/background music.mp3" preload="auto" controls
                        loop>
                    </audio>
                </td>
            </tr>
        </table>
    </div>


    <div class="center">
        <div class="center_txt">

        </div>
    </div>
    <div class="footer">
        <div class="txt_footer">
            <?php echo $lang["droits"] ?>
        </div>
    </div>



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
                    echo '<a target="_blank" href="https://reservations.verticalbooking.com/premium/index.html?id_albergo=13549&dc=3614&lingua_int=fra&id_stile=19825">'
                        ?>
                <?php if ($_SESSION["lang"] == "en")
                    echo '<a target="_blank" href="https://reservations.verticalbooking.com/premium/index.html?id_albergo=13549&dc=3614&lingua_int=eng&id_stile=19825">'
                        ?>
                <?php echo $lang["reservation"]; ?>
                </a>
            </li>
            <li>
                <a href="activites.php">
                    <?php echo $lang["activites"] ?>
                </a>
            </li>

            <li>
                <?php echo $lang["galerie"] ?>
                <ul>
                    <li><a href="galerieInterieur.php">
                            <?php echo $lang["interieur"]; ?>
                        </a></li>
                    <li><a href="galerieExterieur.php"><?php echo $lang["exterieur"]; ?></a></li>
                    <li><a href="galerie360.php">
                            <?php echo $lang["en360"]; ?>
                        </a></li>
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
    <script src="js/jquery.singleimagepopup.min.js"></script>
    <script>
        $(document).ready(function () {
            var rand = Math.floor(Math.random() * (2 - 1 + 1) + 1)

            $("#singleimagepopup").singleImagePopup({
                width: "100%",
                height: "100%",
                imageUrl: "./images/bg/popup/" + rand + ".jpg",
                stop: false,
            });
        });
    </script>
</body>

</html>