<?php 

$kru = ["toni", "kresna", "palupi", "oriza", "singgih", "geraldo", "bagus",
"farhan", "agni", "jalal", "gunandi", "pian", "budi", "hani", "bejo"];

foreach ($kru as $key => $nama) {
    echo "Nama : $nama <br>";

    if ($nama == "farhan") {
        echo "Farhan ada di index ke- $key <br>";
        break;
    }
}


?>