<?php 

$warna = ["merah","biru","kuning","merah","hijau","oranye","ungu",
"biru", "kuning","merah","hijau","oranye","ungu","merah"];

$jumlah_merah=0;

foreach ($warna as $nomor => $isi) {
    echo "Index ke $nomor berisi $isi <br>";

    if ($isi == "merah") {
        $jumlah_merah++;
    }
}

echo "jumlah warna merah = ".$jumlah_merah;
?>