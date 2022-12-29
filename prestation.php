<?php
include "config.php"
    ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Préstation</title>
    <meta name="description"
        content="Nos prestations haut de gamme vous assurent un service hôtelier complet, une restauration gastronomique, la mise à disposition d’un chauffeur, une conciergerie 24h/24…" />
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
    <script type="text/javascript">

        var gObjet = { slide_interval: 2800, transition: 1, transition_speed: 1800, stop_loop: 1, keyboard_nav: 0, thumb_links: 1, performance: 0, slide_links: false, slides: [{ image: "images/bg/prestation.jpg" }, { image: "images/bg/prestation.jpg" }] };

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
            $("body").queryLoader2({ onComplete: function () { $(".preloader").fadeOut(1e3) }, barColor: "#000000", backgroundColor: "#000000", percentage: false, barHeight: 2, completeAnimation: "fade" })
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
                    <li>
                        <a href="index.php" class="selectedL">
                            <?php echo $lang["presentation"] ?>
                        </a>
                    </li>
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
        <div class="sous_menu">
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
                <li><a href="prestation.php" class="selectedL">
                        <?php echo $lang["prestation"] ?>
                    </a></li>
            </ul>
        </div>

        <div class="center">
            <div class="center_txt">
                <div class="block_txt_center" style="float:left; width:400px; padding:25px 0 0 0; margin-left:100px">

                    <div class="scroll-pane">
                        <?php echo $lang["prestationText"]
                            ?>
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
                    <li><a href="deluxe.php">Chambre Deluxe</a></li>
                    <li><a href="junior.php">Suites Junior</a></li>
                    <li><a href="prestige.php">Suits Prestige</a></li>
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
            <li><a href="reservation.php">
                    <?php echo $lang["reservation"] ?>
                </a></li>


            <li>
                <a href="activites.php"><?php echo $lang["activites"] ?></a>

            </li>

            <li>
                <?php echo $lang["galerie"] ?>
                <ul>
                     <li><a href="galerieInterieur.php"><?php echo $lang["interieur"]; ?></a></li>
                <li><a href="galerieExterieur.php" ><?php echo $lang["exterieur"]; ?></a></li>
                <li><a href="galerie360.php"><?php echo $lang["en360"]; ?></a></li>
                </ul>
            </li>


            <li><a href="contact.php">
                    <?php echo $lang["contact"] ?>
                </a></li>

        </ul>
        <div class="langue"><a href="index.php?lang=fr">FR</a><span
                style="color:#7A7A7A;font-family:arial;font-size:12px;"> | </span> <a
                href="index.php?lang=en">EN</a></div>
    </div>
</body>

</html>