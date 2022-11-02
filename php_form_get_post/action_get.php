<?php
if(isset($_GET["sito"])){
    $url = "";

    if($_GET["sito"] == "ansa"){
        $url = "https://www.ansa.it/sito/notizie/";
    } else if ($_GET["sito"] == "repubblica") {
        $url = "https://www.repubblica.it/";
    } else {
        $url = "https://www.corriere.it/";
    }
}

if(isset($_GET["categoria"])){
    $url = $url . $_GET["categoria"];
    if($_GET["sito"] == "ansa"){
        $url = $url . "/" . $_GET["categoria"].".shtml";
    }
}

echo "Stai per essere rediretto verso " . $url;
header("Location: " . $url);
?>