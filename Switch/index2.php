<!-- Pengecekan kondisi ganda -->

<?php 
$warna = 'biru';
$ukuran = 'XL';

$biaya = 80000;
$biaya_tambahan = 15000;

// Pengecekan untuk ukuran XL dengan warna kain merah, dikenakan biaya tambahan
// if($warna == 'merah' && $ukuran == 'XL'){
//     echo "   Total harga : ".($biaya+$biaya_tambahan);
// } else {
//     echo "Total harga : ".$biaya;

// }


// Pengecekan untuk ukuran XL atau warna kain merah, dikenakan biaya tambahan
if($warna == 'merah' || $ukuran == 'XL'){
    echo "Total harga : ".($biaya+$biaya_tambahan);
} else {
    echo "Total harga : ".$biaya;

}

?>