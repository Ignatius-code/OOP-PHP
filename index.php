<?php 

require_once 'animal.php';
require_once 'ape.php';
require_once 'frog.php';

$sheep = new Animal("shaun", 2, "false");

echo "Nama: " . $sheep->name; // "shaun"
echo "<br> Jumlah Kaki: ". $sheep->legs; // 2
echo "<br> Cold blooded: ". $sheep->cold_blooded; // false


$sungokong = new Ape("kera sakti", 2, "false");

echo "<br><br> Nama: " . $sungokong->name;
echo "<br> Jumlah Kaki: ". $sungokong->legs;
echo "<br> Cold blooded: ". $sungokong->cold_blooded;
$sungokong->yell(); // "Auooo"


$kodok = new Frog("buduk", 4, "true");
echo "<br><br> Nama: " . $kodok->name;
echo "<br> Jumlah Kaki: ". $kodok->legs;
echo "<br> Cold blooded: ". $kodok->cold_blooded;
$kodok->jump() ; // "hop hop"