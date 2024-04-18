<?php 

$siswa = [
    ['nama' => 'toni', 'kelas' => '2A'],
    ['nama' => 'budi', 'kelas' => '2A'],
    ['nama' => 'siti', 'kelas' => '2B'],
    ['nama' => 'lala', 'kelas' => '2C'],
    ['nama' => 'lala', 'kelas' => '2B'],
    ['nama' => 'lala', 'kelas' => '2D'],
];

foreach ($siswa as $key => $value) {
    if ($value ['kelas'] == '2A')
    continue;
    echo "Nama : ".$value['nama']."<br>";
    echo "Kelas : ".$value['kelas']."<br>"."<br>";
}


?>