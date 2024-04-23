<?php 

$siswa = [
    ['nama' => 'toni', 'kelas' => '2A', 'goldarah' => 'A'],
    ['nama' => 'budi', 'kelas' => '2A' , 'goldarah' => 'B'],
    ['nama' => 'siti', 'kelas' => '2B' , 'goldarah' => 'O'],
    ['nama' => 'lala', 'kelas' => '2C' , 'goldarah' => 'AB'],
    ['nama' => 'lala', 'kelas' => '2B' , 'goldarah' => 'AB'],
    ['nama' => 'lala', 'kelas' => '2D' , 'goldarah' => 'B'],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>kelas</th>
            <th>Gol. darah</th>
        </tr>

        <?php 
        foreach ($siswa as $key => $value): 
        ?>

        <tr>
            <td><?php echo $value['nama']?></td>
            <td><?php echo $value['kelas']?></td>
            <td><?php echo $value['goldarah']?></td>
        </tr>
        <?php endforeach;  ?>
    </table>
</body>
</html>