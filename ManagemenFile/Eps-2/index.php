<!-- Menyimpan Dalam Format Serialize Dan Json -->

<?php

$anggota = [
    ['nama' => 'Rama', 'gol_darah' => 'O'],
    ['nama' => 'Rizki', 'gol_darah' => 'A'],
    ['nama' => 'Aldi', 'gol_darah' => 'B'],
    ['nama' => 'Budi', 'gol_darah' => 'AB'],
];

//mengubah array menjadi serialize
$data = serialize($anggota);
file_put_contents('data.txt', $data); //Hasil serial ini kemudian disimpan dalam file data.txt menggunakan fungsi file_put_contents().

//agar bisa dibaca
//Membaca Data dari File: Baris keempat mengambil isi file data.txt dan menyimpannya dalam variabel $output menggunakan fungsi file_get_contents().
$output = file_get_contents('data.txt'); 
$hasil = unserialize($output); //Mengubah String Serialize Menjadi Array
print_r($hasil)


// //mengubah array menjadi serialize
// $data = json_encode($anggota);
// file_put_contents('data.txt', $data);

// //agar bisa dibaca
// $output = file_get_contents('data.txt');
// $hasil = json_encode($output);
// print_r($hasil)
?>