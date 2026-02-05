<?php
require_once("animal.php");
require_once("Ape.php");
require_once("Frog.php");

$sheep = new Animal("shaun");
echo "Name : " . $sheep->name . "<br>";
echo "Legs : " . $sheep->legs . "<br>";
echo "Cold Blooded : " . $sheep->cold_blooded . "<br><br>";

$monyet = new Ape("Monyet");
echo "Name : " . $monyet->name . "<br>";
echo "Legs : " . $monyet->legs . "<br>";
echo "Cold Blooded : " . $monyet->cold_blooded . "<br>";
echo $monyet->yell();

$kodok = new Frog("Kodok");
echo "Name : " . $kodok->name . "<br>";
echo "Legs : " . $kodok->legs . "<br>";
echo "Cold Blooded : " . $kodok->cold_blooded . "<br>";
echo $kodok->jump();
