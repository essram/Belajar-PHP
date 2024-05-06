<!-- Menulis dan membaca file -->

<?php
$message = "Selamat datang\n";
//cara membuat file di dalam direktori
file_put_contents("message.txt", $message, FILE_APPEND);

//membaca file
$isi_file = file_get_contents("message.txt");
echo $isi_file;
?>