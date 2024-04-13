<?php 

//array didalam array (array multidimensi)
// $a = [250, true, ["Jeruk", "Pepaya", "Pisang"]];
// var_dump($a);
// echo $a[2][0];

$herbivora = ["kambing", "sapi", "ayam"];
$karnivora = ["harimau", "singa", "serigala"];
$omnivora = ["ayam", "monyet", "babi"];

$binatang = ["herbivora" => $herbivora, "karnivora" => $karnivora, "ominivora" => $omnivora];

// echo $binatang[1][2]; cara pertama
echo $binatang["karnivora"][2]; //cara kedua

?>