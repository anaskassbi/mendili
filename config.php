<?php
session_start();

if (!isset($_SESSION["lang"]))
    $_SESSION["lang"] = "fr";
else if (isset($_GET["lang"]) && $_SESSION["lang"] != $_GET["lang"] && !empty($_GET["lang"])) {
    if ($_GET["lang"] == "fr")
        $_SESSION["lang"] = "fr";
    else if ($_GET["lang"] == "en")
        $_SESSION["lang"] = "en";
}

if (!isset($_SESSION["song"]))
    $_SESSION["song"] = "";
else if (isset($_GET["song"]) && $_SESSION["song"] != $_GET["song"] && !empty($_GET["song"])) {
    if ($_GET["song"] == "")
        $_SESSION["song"] = "";
    else if ($_GET["song"] == "autoplay")
        $_SESSION["song"] = "autoplay";
}


if (!isset($_SESSION["small"]))
    $_SESSION["small"] = "";
else if (isset($_GET["small"]) && $_SESSION["small"] != $_GET["small"] ) {
    if (empty($_GET["small"]))
        $_SESSION["small"] = "";
    else if ($_GET["small"] == 1)
        $_SESSION["small"] = 1;
}


require_once "languages/" . $_SESSION["lang"] . ".php";
?>