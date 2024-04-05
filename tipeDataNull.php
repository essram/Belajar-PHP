<?php 
//cara mengindari pesan eror
$pesan = null;
$dataDiri = [
    "nama" => "Rama Esa Vahiba",
    "golDarah" => null,
    "alamat" => "Sidoarjo"
];
// Undefined variable (?? null)
echo $dataDiri['status'] ?? null;
?>