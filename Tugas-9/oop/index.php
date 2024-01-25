<?php
    require_once("animal.php");
    require_once("Frog.php");
    require_once("Ape.php");

    $hewan = new Animal("shaun");
    echo "Name : " . $hewan->binatang . "<br>";
    echo "legs : " . $hewan->legs . "<br>";
    echo "cold blooded : " . $hewan->cold_blooded . "<br><br>";

    $kodok = new Frog("buduk");
    echo "Name : " . $kodok->binatang . "<br>";
    echo "legs : " . $kodok->legs . "<br>";
    echo "cold blooded : " . $kodok->cold_blooded . "<br>";
    echo $kodok->jump("Hop Hop");
    echo "<br><br>";

    $kera = new Ape("kera sakti");
    echo "Name : " . $kera->binatang . "<br>";
    echo "legs : " . $kera->legs . "<br>";
    echo "cold blooded : " . $kera->cold_blooded . "<br>";
    echo $kera->yell("Auooo");
?>