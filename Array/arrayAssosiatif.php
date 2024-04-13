<?php 
// $a = ["sapi", "ayam", "kambing"]; CARA PERTAMA

//index menggunakan angka
// $a[10] = "sapi";
// $a[20] = "ayam";
// $a[30] = "kambing";
// var_dump($a);

//index menggunakan String
// $dataDiri["nama"] = "Rama Esa";
// $dataDiri["golDarah"] = "O";
// $dataDiri["alamat"] = "Malang";

//cara lain
$dataDiri = [
    "nama" => "Rama Esa",
    "golDarah" => "O",
    "alamat" => "Malang"
];


echo "Nama : ".$dataDiri["nama"]."<br>";
echo "Gol. Darah : ".$dataDiri["golDarah"]."<br>";
echo "Alamat : ".$dataDiri["alamat"]."<br>";


?>