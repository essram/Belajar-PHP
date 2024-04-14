<?php 
$warna = ["merah","biru","kuning","merah","hijau","oranye","ungu",
"biru", "kuning","merah","hijau","oranye","ungu","merah"];

$jumlah_merah=0;

$i = 0;

while($i < 15){
    if($warna[$i] == "merah"){
        $jumlah_merah++;
    }
    $i++;
}

echo "jumlah warna merah = ".$jumlah_merah;
?>
