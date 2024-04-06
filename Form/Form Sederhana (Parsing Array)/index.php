<?php 
if(!empty($_POST['proses']))
{
    print_r($_POST);
}
?>

<form action="" method="post">
    Nama : <input type="text" name="nama">
    <br><br>
    Alamat : <input type="text" name="alamat">
    <br><br>
    Program Studi :
    <select name="prodi">
        <option value="TI">Teknik Informatika</option>
        <option value="SI">Sistem Informasi</option>
        <option value="MI">Manajemen Informatika</option>
    </select>
    <br><br>
    <input type="submit" name="proses" id="" value="submit">
</form>