<?php

    require_once('animal.php');

    $sheep          =   new animal("Shaun");

    echo $sheep->name . "<br>";
    echo $sheep->legs . "<br>";
    echo $sheep->cold_blooded . "<br>";
    echo"<br>";

    
    require_once('frog.php');
    $kodok =   new Frog("buduk");
    $kodok->jump(); // "hop hop"
    echo $kodok->name."<br>";
    echo $kodok->legs."<br>";
    echo $kodok->cold_blooded."<br>";
    echo"<br>";

    require_once('ape.php');

    $kera =   new Ape("Kera Sakti");
    $kera->yell(); // "Auooo"
    echo $kera->name."<br>";
    echo $kera->legs."<br>";
    echo $kera->cold_blooded."<br>";
    

?>