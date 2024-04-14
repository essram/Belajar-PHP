<?php 
//for biasa
// for($angka = 0; $angka <= 10; $angka++){
//     echo $angka.", ";
//}

//for pada array
$warna = ["merah","biru","kuning","merah","hijau","oranye","ungu",
"biru", "kuning","merah","hijau","oranye","ungu","merah"];

$jumlah_merah=0;

for($i = 0; $i<15;$i++){
    if($warna[$i] == "merah"){
        $jumlah_merah++;
}
}

echo "jumlah warna merah = ".$jumlah_merah;
?>
