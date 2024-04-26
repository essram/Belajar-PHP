<?php 

function cetakPesan($nama = null){
    if(empty($nama))
      echo "Selamat Datang!";
    else 
      echo "Selamat Datang $nama!";
}  

$nama = "rama";

cetakPesan($nama);

//kurang lebih sepert ini
?>