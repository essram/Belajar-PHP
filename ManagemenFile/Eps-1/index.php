<!-- Menulis dan membaca file -->

<?php
$message = "Ini adalah pesan yang diketik di file PHP\n";
//cara membuat file di dalam direktori
file_put_contents("message.txt", $message,);

//membaca file
$isi_file = file_get_contents("message.txt");
echo $isi_file;
?>