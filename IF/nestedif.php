<?php 
 $nilai_tes = 70;
 $wawancara = 'A';


 //bila nilai tes lebih dari 70
 if($nilai_tes >= 70){
   echo "Anda lulus.";

   if($wawancara == 'A'){
      echo "Predikat anda sangat memuaskan";
   } else if ($wawancara == 'B') {
      echo "Predikat anda memuaskan";
   } else {
      echo "Predikat anda cukup";
   }
 } else {
   echo "Anda belum lulus";
 }
?>