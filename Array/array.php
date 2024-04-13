<?php 
$a = ["sapi", "ayam", "kambing"];

//menambah value baru pada array
$a[] = "bebek";

//mendefinisikan secara langsung pada array
$a[4] = "angsa";



//mengganti nilai pada array
$a[0] = "kerbau";

//akses index yang nilainya tidak ditemukan (?? '')
echo $a[10] ?? '';


var_dump($a);
//print_r($a);
?>