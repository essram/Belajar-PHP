<?php 
 $nilai_tes = 55;
 $wawancara = 'A';


 //bila nilai tes lebih dari 70
 if($nilai_tes >= 70){
    echo "Anda lulus";

    if($wawancara == 'A'){
        echo "Predikat A";
 } elseif($wawancara == 'B'){
    echo "Predikat B";
 } elseif($wawancara == 'C'){
    echo "Predikat C";
 }
}  else {
    echo "Predikat D";
}
?>